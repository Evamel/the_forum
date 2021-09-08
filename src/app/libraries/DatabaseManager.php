<?php 
    class DatabaseManager{
        private $dbHost = DB_HOST;
        private $dbUser = DB_USER;
        private $dbPass = DB_PASS;
        private $dbName = DB_NAME;

        
        protected function connectDb()
        {
            try{
                $db = new PDO('mysql:host=' . $this->dbHost .';dbname='. $this->dbName .';',$this->dbUser,$this->dbPass);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
            } catch(Exception $e){
                die('Error : '.$e->getMessage());
            }
        }
    }
