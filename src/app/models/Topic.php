<?php
class Topic {
    private $db;

    public function __construct(){
       $this->db = new Database;
    }

    public function findAllTopics(){
       $getid = $_GET['id'];
       $this->db->query('SELECT t.*, m4.*,u.*
       FROM topics t
       LEFT JOIN 
       ( SELECT m1.topic_id, m3.count, m3.message_date, m1.message_content,m1.user_id 
        FROM messages m1 
        INNER JOIN 
        ( SELECT m2.topic_id, COUNT(m2.topic_id) count, MAX(m2.message_date) message_date 
         FROM messages m2 GROUP BY m2.topic_id ) m3 
        ON m1.topic_id = m3.topic_id AND m1.message_date = m3.message_date ) m4 
        ON t.topic_id = m4.topic_id
         LEFT JOIN users as u
         ON m4.user_id =u.user_id
        WHERE t.board_id =:id;');
      $this->db->bind(':id',$getid);
      $results = $this->db->resultSet();
        return $results;
       
     }

     public function findTopicAutor(){
      $getid = $_GET['id'];
      $this->db->query('SELECT topics.topic_subject, topics.topic_id, topics.user_id, users.user_name FROM topics LEFT JOIN users ON topics.user_id = users.user_id  WHERE topics.board_id =:id;');
     $this->db->bind(':id',$getid);
     $results = $this->db->resultSet();
       return $results;
     }

    public function messagesByTopic(){
      $getid = $_GET['id'];
        $this->db->query('SELECT COUNT(message_id) AS total,topic_subject,topic_date,topics.topic_id,topics.board_id FROM messages RIGHT OUTER JOIN topics ON messages.topic_id = topics.topic_id WHERE board_id=:id  GROUP BY topic_subject ORDER BY topic_id ASC;');
        $this->db->bind(':id',$getid);       
        $results = $this->db->resultSet();
          return $results;
       
     }

     public function lastMessage(){
          $this->db->query('SELECT users.user_name, messages.message_date FROM users JOIN messages ON messages.user_id = users.user_id ORDER BY messages.message_date DESC LIMIT 1;');    
          $results = $this->db->resultSet();
        return $results;
     }


    public function createTopic($data){
      $this->db->query('INSERT INTO topics (user_id, topic_subject, board_id) VALUES (:user_id, :subject, :board_id)');
      $this->db->bind(':user_id',$data['user_id']);
      $this->db->bind(':board_id',$data['board']);
      $this->db->bind(':subject',$data['subject']);
      if ($this->db->execute()){
          return true;
      }else{
           return false;
      }
    }

    public function findTopicById($id){
        
        $this->db->query('SELECT * FROM topics WHERE topic_id= :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function updateTopic($data){
        $this->db->query('UPDATE topics SET topic_subject=:subject WHERE topic_id=:id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':subject', $data['subject']);
        if ($this->db->execute()) {
            return true;
        } else {
             return false;
        }
      }

    public function deleteTopic($id) {
      $this->db->query('DELETE FROM topics WHERE topic_id= :id');
      $this->db->bind(':id', $id);

      if ($this->db->execute()) {
        return true;
    } else {
         return false;
    }
    }     
}