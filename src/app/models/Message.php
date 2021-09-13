<?php
class Message {
    private $db;

    public function __construct(){
       $this->db = new Database;
    }

    public function findAllMessages(){
       $this->db->query('SELECT * FROM messages ORDER BY message_date ASC');
       $results = $this->db->resultSet();

       return $results;
    }

    public function addMessage($data){
      $this->db->query('INSERT INTO messages (message_by, message_content) VALUES (:user_id, :content)');
      $this->db->bind(':user_id',$data['user_id']);
      $this->db->bind(':content',$data['content']);
      if ($this->db->execute()){
          return true;
      }else{
           return false;
      }
    }

    public function findMessageById($message_id){
        $this->db->query('SELECT * FROM messages WHERE message_id=:id');
        $this->db->bind(':id', $message_id);
        $row = $this->db->single();
        return $row;
    }

  
    
}