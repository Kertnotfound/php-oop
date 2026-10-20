<?php

require_once 'App/Models/Article.php';
require_once 'App/Services/ArticleService.php';

use App\Services\ArticleService;
use App\Models\Article;

$service = new ArticleService();
$article = $service->createArticle("My Article", "John Doe");

echo $article->title . " by " . $article->author;
echo $article->content;