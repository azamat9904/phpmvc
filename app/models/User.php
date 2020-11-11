<?php
    class User{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function register($data){
            $this->db->query("INSERT INTO users (name,email,password) VALUES(:name,:email,:password)");
            $this->db->bind('name', $data['name']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('password', $data['password']);

            if($this->db->execute()){
                return true;
            }

            return false;
        }   

        public function isUserExist($email){
            $this->db->query('SELECT * FROM users WHERE email = :email');
            $this->db->bind('email', $email);
            $this->db->execute();
            $result = $this->db->rowCount();
            if($this->db->rowCount() > 0){
                return true;
            }
            return false;
        }

        public function login($email, $password){
            $this->db->query('SELECT * FROM users WHERE email = :email');
            $this->db->bind('email', $email);
            $user = $this->db->single();

            if(password_verify($password, $user->password)){
                return $user;
            }

            return false;
        }

    }   
