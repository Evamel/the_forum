<?php

class Message
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getMessages()
    {
        $this->db->query("SELECT * FROM messages");
        $result = $this->db->resultSet();
        return $result;
    }
}
