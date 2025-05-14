<?php

namespace App\Models;

use App\Enums\ChatMessageType;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Chat extends Model
{
    use HasUuids;

    protected $fillable = ['title'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function messages()
    {
        return $this->hasMany(ChatMessage::class);
    }

    public function toMarkdown()
    {
        $markdown = "---\nmodel: <<replace-model>>\n---\n\n";

        if ($this->messages->isEmpty()) {
            return "*No messages in this chat yet.*\n";
        }

        foreach ($this->messages as $message) {
            switch ($message->type) {
                case ChatMessageType::USER_QUERY:
                    $query = trim($message->userQuery->message);
                    $markdown .= "**User:**\n> {$query}\n\n";
                    break;
                case ChatMessageType::CHAT_ANSWER:
                    $markdown = Str::replace('<<replace-model>>', $message->chatAnswer->llm, $markdown);
                    $answer = trim($message->chatAnswer->message);
                    $markdown .= "**Assistant:**\n{$answer}\n\n";

                    $toolCalls = $message->graphImageToolCalls;
                    $codeCalls = $message->runCodeToolCalls;
                    $calls = $toolCalls->merge($codeCalls)->sortBy('created_at');

                    if ($calls->isNotEmpty()) {
                        $markdown .= "**Tool Calls:**\n\n";
                        foreach ($calls as $call) {
                            if ($call instanceof \App\Models\GraphImageToolCall) {
                                $markdown .= "- **Graph Image Tool Call:**\n";
                                $markdown .= '  - Is Directed: '.($call->isDirected ? 'Yes' : 'No')."\n";
                                $edges = is_array($call->edges) ? implode(', ', $call->edges) : $call->edges;
                                $markdown .= '  - Edges: '.$edges."\n";
                                $markdown .= '  - Is Planar: '.($call->isPlanar ? 'Yes' : 'No')."\n";
                                $markdown .= '  - Image: '.$call->image."\n";
                            } elseif ($call instanceof \App\Models\RunCodeToolCall) {
                                $markdown .= "- **Run Code Tool Call:**\n";
                                $markdown .= "  - Code:\n```\n".$call->code."\n```\n";
                                $markdown .= '  - Stdout: '.$call->stdout."\n";
                                $markdown .= '  - Stderr: '.$call->stderr."\n";
                                $files = is_array($call->files) ? implode(', ', $call->files) : $call->files;
                                $markdown .= '  - Files: '.$files."\n";
                                $images = is_array($call->images) ? implode(', ', $call->images) : $call->images;
                                $markdown .= '  - Images: '.$images."\n";
                            }
                            $markdown .= "\n";
                        }
                    }
                    break;
                case ChatMessageType::RELEVANT_TOPICS:
                    $topicsModel = $message->relevantTopics;
                    $allAttributes = $topicsModel->getAttributes();
                    $identifiedTopics = [];

                    foreach ($allAttributes as $key => $value) {
                        if (($value === true || $value === 1) && ! in_array($key, ['id', 'chat_message_id', 'created_at', 'updated_at'])) {
                            $identifiedTopics[] = $key;
                        }
                    }

                    if (! empty($identifiedTopics)) {
                        $markdown .= '**System:** Identified relevant topics: '.implode(', ', $identifiedTopics).".\n\n";
                    }
                    break;
                case ChatMessageType::VECTOR_SEARCH:
                    if ($message->knowledgeChunkSearchResults->isNotEmpty()) {
                        $markdown .= "**System:** Vector Search Results:\n\n";
                        foreach ($message->knowledgeChunkSearchResults as $result) {
                            $knowledgeChunk = $result->knowledgeChunk;
                            $relevance = $result->isRelevant ? 'Yes' : 'No';

                            $markdown .= '- **Knowledge Chunk:** '.$knowledgeChunk->title."\n";
                            $markdown .= '  - Description: '.$knowledgeChunk->description."\n";
                            $tags = implode(', ', $knowledgeChunk->tags);
                            $markdown .= '  - Tags: '.$tags."\n";
                            $markdown .= '  - Topic: '.$knowledgeChunk->topic."\n";
                            $markdown .= '  - Distance: '.number_format($result->distance, 2)."\n";
                            $markdown .= '  - Relevant: '.$relevance."\n\n";
                            $markdown .= $knowledgeChunk->content."\n";
                        }
                    } else {
                        $markdown .= "*No vector search results available.*\n\n";
                    }
                    break;
            }
        }

        return trim($markdown);
    }
}
