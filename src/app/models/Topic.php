<?php

class Topic
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getTopics()
    {
        $this->db->query("SELECT * FROM topics");
        $result = $this->db->resultSet();
        return $result;
    }
}
