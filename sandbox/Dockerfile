FROM python:3.12

RUN pip install jupyter ipykernel fastapi uvicorn pandas numpy dask polaris pyjanitor matplotlib seaborn plotly bokeh altair geopandas scikit-learn networkx

WORKDIR /app

COPY . .

EXPOSE 3456

CMD ["uvicorn", "api:app", "--host", "0.0.0.0", "--port", "3456"]

