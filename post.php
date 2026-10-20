<?php

require_once 'App/Models/Article.php';
require_once 'App/Services/ArticleService.php';

use App\Services\ArticleService;

$service = new ArticleService();
$post = $service->createArticle(
    "My First Post",
    "John Doe",
    "This is the text of my post."
);

echo $post->title . "\n";
echo "By " . $post->author . "\n";
echo $post->content;
