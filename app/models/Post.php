<?php
    class Post{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function getPosts(){
            $this->db->query("SELECT * FROM posts as p INNER JOIN users as u ON p.user_id = u.id ORDER BY p.created_at DESC");
            return $this->db->resultSet();
        }
    }