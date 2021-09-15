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
        $this->db->query("SELECT * FROM boards;");
        $result = $this->db->resultSet();
        return $result;
    }

    public function getBoardById($id){
      $this->db->query('SELECT * FROM boards WHERE board_id= :id');
      $this->db->bind(':id', $id);
      $row = $this->db->single();
      return $row;
  }

    


    public function sumTopics(){
        $this->db->query('SELECT COUNT(topic_id) AS topicTotal,topics.board_id,boards.board_id,boards.board_name FROM topics RIGHT OUTER JOIN boards ON topics.board_id = boards.board_id GROUP BY board_name;');
        $results = $this->db->resultSet();
        return $results;
     }

     public function sumPosts(){
        $this->db->query('SELECT COUNT(message_id) AS messageTotal,boards.board_id,boards.board_name FROM messages RIGHT OUTER JOIN topics ON messages.topic_id = topics.topic_id INNER JOIN boards on topics.board_id = boards.board_id GROUP BY board_name ORDER BY board_id ASC;');
        $results = $this->db->resultSet();
        return $results;
     }

     public function lastPost(){
        $this->db->query('SELECT * FROM boards LEFT OUTER JOIN topics ON boards.board_id = topics.board_id ORDER BY topic_date DESC LIMIT 3;');
        $results = $this->db->resultSet();
        return $results;
     }

     public function lastPostDate(){
      $this->db->query('SELECT messages.message_id, messages.message_date, topics.topic_subject FROM topics LEFT OUTER JOIN messages ON messages.topic_id = topics.topic_id ORDER BY message_date DESC LIMIT 3;');
      $results = $this->db->resultSet();
      return $results;
   }
     

}

