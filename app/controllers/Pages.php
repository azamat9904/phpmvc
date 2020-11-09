<?php 
    class Pages extends Controller{
        public function __construct(){
            echo "Pages loaded";
        }

        public function index(){
           
        }

        public function getProduct($id){
            echo $id;
        }
    }