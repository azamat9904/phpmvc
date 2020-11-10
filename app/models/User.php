<?php
    class User{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function isUserExist($email){
            $this->db->query('SELECT * FROM users WHERE email = :email');
            $this->db->bind('email', $email);
            $result = $this->db->rowCount();
            var_dump($result);
            if($this->db->rowCount() > 0){
                return true;
            }
            return false;
        }

    }   
