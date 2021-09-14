<?php
class Message
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function findAllMessages()
  {
    $this->db->query('SELECT messages.message_content, messages.message_id, messages.user_id, users.user_name, users.user_signature  FROM messages INNER JOIN users ON messages.user_id = users.user_id ORDER BY message_date ASC');
    $results = $this->db->resultSet();
    //query to display user name and signature
    return $results;
  }



  public function addMessage($data)
  {
    $this->db->query('INSERT INTO messages (user_id, message_content) VALUES (:user_id, :content)');
    $this->db->bind(':user_id', $data['user_id']);
    $this->db->bind(':content', $data['content']);
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function findMessageById($id)
  {

    $this->db->query('SELECT * FROM messages WHERE message_id= :id');
    $this->db->bind(':id', $id);
    $row = $this->db->single();
    return $row;
  }

  public function updateMessage($data)
  {
    $this->db->query('UPDATE messages SET message_content=:content WHERE message_id=:id');
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':content', $data['content']);
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function deleteMessage($id)
  {
    $this->db->query('DELETE FROM messages WHERE message_id= :id');
    $this->db->bind(':id', $id);

    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
