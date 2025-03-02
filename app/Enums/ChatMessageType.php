<?php

namespace App\Enums;

enum ChatMessageType: string
{
    case USER_QUERY = 'user_query';
    case VECTOR_SEARCH = 'vector_search';
    case RELEVANT_TOPICS = 'relevant_topics';
}
