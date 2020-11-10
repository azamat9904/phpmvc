<?php 
    class Pages extends Controller{

        public  function __construct(){
          
        }

        public function index(){
            $data = [
                'title' => 'Sharposts', 
                'description' => 'Simple social network built on the Traversy'
            ];
            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title' => 'About us',
                'description' => 'App to share posts with friends'
            ];
            $this->view('pages/about', $data);
        }
    }