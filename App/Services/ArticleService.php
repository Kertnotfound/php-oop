<?php

namespace App\Services;

class ArticleService
{
    public function createArticle($title, $author, $content = "")
    {
        return new \App\Models\Article($title, $content, $author);
    }
}
