<?php 

declare(strict_types=1);

require_once '../app/libraries/DatabaseManager.php'; 

class Articles extends DatabaseManager
{
    public function getArticles(){
        $data = $this->fetchArticles();
        return $data;
    }

    public function fetchArticles(){
        $db = $this->connectDb();

        $req = $db->query(
            'SELECT * 
            FROM articles
            ORDER BY publish_date 
            DESC');

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSingleArticle($title){
        
        $data = $this->fetchSingleArticle($title);
        return $data;
    }

    public function fetchSingleArticle($title){
        $db = $this->connectDb();

        $req = $db->query(
            "SELECT * 
            FROM articles
            WHERE title = '$title'
            ");

        return $req->fetch(PDO::FETCH_ASSOC);
    }

    

}