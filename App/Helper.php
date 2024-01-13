<?php
    function view($file_name){
        include_once($_SERVER['DOCUMENT_ROOT']."/resource/views/$file_name.php");
    }

    function request(){
        return (object) $_REQUEST;
    }

    function resource_include($file_name,$array = []){
        if(isset($array) && count($array)){
            // dd(extract($array));
            extract($array);
        }

        include_once($_SERVER['DOCUMENT_ROOT']."/resource/views/$file_name.php");
    }

    function assets($file_name){
        // dd($file_name);
        $cap_http = explode('/', $_SERVER['SERVER_PROTOCOL'])[0];
        $url =strtolower($cap_http).'://';
        $url.=$_SERVER['HTTP_HOST'];
        // dd($url);
        // dd($_SERVER['DOCUMENT_ROOT']."/public/$file_name");
        // return $_SERVER['DOCUMENT_ROOT']."/public/$file_name";
        return $url."/public/$file_name";
    }
?>