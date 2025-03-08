import sys
import io
import tempfile
import os
import base64

from fastapi import FastAPI, HTTPException
from pydantic import BaseModel, Field
from typing import List, Dict, Union, Any, Tuple
import networkx as nx
import matplotlib.pyplot as plt
import io
import base64

import IPython.core.interactiveshell

app = FastAPI()


class CodeRequest(BaseModel):
    code: str = Field(..., description="The code to be executed.")


class CodeResponse(BaseModel):
    stdout: str = Field(..., description="The standard output from the executed code.")
    stderr: str = Field(..., description="The error output from the executed code, if any.")
    files: List[str] = Field(..., description="List of generated file names.")
    images: List[Dict[str, str]] = Field(
        ..., description="List of images encoded in base64 with their filenames."
    )

class GraphRequest(BaseModel):
    edges: List[Union[List[Any], Tuple[Any, ...]]] = Field(
        ...,
        description=(
            "List of edges. Each edge must be represented as either "
            "[node1, node2] or [node1, node2, attr_dict]."
        )
    )
    directed: bool = Field(
        default=False, description="Indicates if the graph should be directed."
    )

class GraphResponse(BaseModel):
    is_planar: bool
    image: str  # Base64 encoded image data

@app.post("/run_code", response_model=CodeResponse)
async def run_code(request: CodeRequest):
    """
    Execute the provided code in an isolated environment, capturing stdout, stderr,
    generated files, and any images (as base64-encoded strings). The working directory
    is temporarily switched to a unique temp directory.
    """
    # Backup current stdout and stderr
    old_stdout = sys.stdout
    old_stderr = sys.stderr
    sys.stdout = io.StringIO()
    sys.stderr = io.StringIO()

    # Create a temporary directory and switch to it
    temp_dir = tempfile.mkdtemp()
    old_cwd = os.getcwd()
    os.chdir(temp_dir)

    # Prepare the IPython shell
    ipython_shell = (
        getattr(sys.modules.get("IPython"), "get_ipython", lambda: None)()
        or IPython.core.interactiveshell.InteractiveShell.instance()
    )

    try:
        # Execute the provided code using IPython's run_cell
        ipython_shell.run_cell(request.code)

        # Capture stdout and stderr output
        stdout_output = sys.stdout.getvalue()
        stderr_output = sys.stderr.getvalue()

        # Collect generated files and base64-encoded images
        generated_files = []
        base64_images = []

        for filename in os.listdir(temp_dir):
            file_path = os.path.join(temp_dir, filename)
            if os.path.isfile(file_path):
                generated_files.append(filename)
                # Check if file is an image based on extension
                if filename.lower().endswith((".png", ".jpg", ".jpeg", ".gif", ".svg")):
                    with open(file_path, "rb") as image_file:
                        encoded_image = base64.b64encode(image_file.read()).decode("utf-8")
                        base64_images.append({"filename": filename, "content": encoded_image})
    except Exception as e:
        stdout_output = ""
        stderr_output = f"Error: {str(e)}"
        generated_files = []
        base64_images = []
    finally:
        # Restore stdout, stderr, and working directory
        sys.stdout = old_stdout
        sys.stderr = old_stderr
        os.chdir(old_cwd)

    return CodeResponse(
        stdout=stdout_output,
        stderr=stderr_output,
        files=generated_files,
        images=base64_images,
    )

@app.post("/generate_graph_image", response_model=GraphResponse)
async def generate_graph_image(request: GraphRequest):
    try:
        # Create the appropriate graph type
        G = nx.DiGraph() if request.directed else nx.Graph()

        # Add edges to the graph. Each edge can be a list/tuple of 2 or 3 elements.
        for edge in request.edges:
            if isinstance(edge, (list, tuple)):
                if len(edge) == 2:
                    G.add_edge(edge[0], edge[1])
                elif len(edge) == 3:
                    if isinstance(edge[2], dict):
                        G.add_edge(edge[0], edge[1], **edge[2])
                    else:
                        raise ValueError("Edge attributes must be provided as a dictionary.")
                else:
                    raise ValueError("Each edge must have 2 or 3 elements.")
            else:
                raise ValueError("Each edge must be a list or tuple.")

        # Check for planarity and choose a layout accordingly
        is_planar, _ = nx.check_planarity(G)
        if is_planar:
            pos = nx.planar_layout(G)
        else:
            pos = nx.spring_layout(G)

        # Draw the graph
        plt.figure(figsize=(8, 6))
        nx.draw(G, pos, with_labels=True, font_weight="bold")

        # Save the image to an in-memory buffer
        img_buffer = io.BytesIO()
        plt.savefig(img_buffer, format="png")
        plt.close()
        img_buffer.seek(0)

        # Encode the image in base64 format
        img_base64 = base64.b64encode(img_buffer.getvalue()).decode("utf-8")
        image_data = f"data:image/png;base64,{img_base64}"

        return GraphResponse(is_planar=is_planar, image=image_data)
    except Exception as e:
        raise HTTPException(status_code=400, detail=str(e))

