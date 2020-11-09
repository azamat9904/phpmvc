<?php 
    class Pages {
        public function __construct(){
            echo "Pages loaded";
        }

        public function getProduct($id){
            echo $id;
        }
    }