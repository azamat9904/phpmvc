<?php 
    require_once "config/config.php";
    require_once "helpers/url_helpers.php";

    spl_autoload_register(function($className){
        require_once 'libs/'.$className . '.php';
    });