<?php

declare(strict_types = 1);

require_once '../app/Model/Articles.php';
require_once '../app/Model/Article.php';

class ArticleController
{
    public function index()
    {
        $model = new Articles;
        $articles = $model->getArticles();

        foreach($articles as $key =>$article){
            $articles[$key] = new Article($article['title'],$article['description'],$article['publish_date']);
        }
        // Load the view
        require '../app/View/articles/index.php';
    }

    public function show()
    {
        $model = new Articles;
        $article = $model->getSingleArticle($_GET['title']);
        $article = new Article($article['title'],$article['description'],$article['publish_date']);
        // Load the view
        require '../app/View/articles/show.php';
    }
}