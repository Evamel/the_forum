<?php
class Topic {
    private $db;

    public function __construct(){
       $this->db = new Database;
    }

    public function findAllTopics(){
       $this->db->query('SELECT topics.topic_subject, topics.topic_id, topics.user_id, users.user_name FROM topics LEFT JOIN users ON topics.user_id = users.user_id ORDER BY topic_date ASC');
       $results = $this->db->resultSet();
     //query to display user name and signature
       return $results;
       
    }

    public function messagesByTopic(){
        $this->db->query('SELECT COUNT(message_id) AS total,topic_subject,topic_date,user_name,topics.topic_id,topics.board_id,users.user_id FROM messages RIGHT OUTER JOIN topics ON messages.topic_id = topics.topic_id INNER JOIN users ON topics.user_id = users.user_id GROUP BY topic_subject ORDER BY total ASC;');
        $results = $this->db->resultSet();
      //query to display user name and signature
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