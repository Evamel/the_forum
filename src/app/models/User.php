<?php
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getUsers()
    {
        $this->db->query("SELECT * FROM users");
        $result = $this->db->resultSet();
        return $result;
    }

    public function findUserByEmail($email)
    {
     $this->db->query('SELECT * FROM users WHERE user_email = :email');
     $this->db->bind(':email',$email);
     //check if exist
     if($this->db->rowCount>0){
         return true;
     } else {
         return false;
     }
    }
}
