<?php
class Board
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getBoards()
    {
        $this->db->query("SELECT * FROM boards");
        $result = $this->db->resultSet();
        return $result;
    }


    public function sumTopics(){
        $this->db->query('SELECT * FROM topics ORDER BY topic_date ASC');
        $results = $this->db->resultSet();
      //query to display user name and signature
        return $results;
     }

     public function sumPosts(){
        $this->db->query('SELECT * FROM topics ORDER BY topic_date ASC');
        $results = $this->db->resultSet();
      //query to display user name and signature
        return $results;
     }

     public function lastPost(){
        $this->db->query('SELECT * FROM topics ORDER BY topic_date ASC');
        $results = $this->db->resultSet();
      //query to display user name and signature
        return $results;
     }

}

