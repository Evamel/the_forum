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

    public function register($data)
    {
        $this->db->query('INSERT INTO users (user_name, user_email, user_pass, user_avatar) VALUES(:username, :email, :password, :avatar)');
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':avatar', $data['avatar']);
        //execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($username, $password)
    {
        $this->db->query('SELECT * FROM users WHERE user_name = :username');
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = $row->user_pass;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE user_email = :email');
        $this->db->bind(':email', $email);
        //check if exist
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($data)
    {
        $this->db->query('UPDATE users SET user_name =:username, user_email =:email, user_signature =:signature, user_avatar =:avatar WHERE user_id=:id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':signature', $data['signature']);
        $this->db->bind(':avatar', $data['avatar']);
        //execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
