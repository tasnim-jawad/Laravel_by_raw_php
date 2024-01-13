<?php
namespace App\Http\Controllers;

    class websiteController{
        public function home(){
            // echo "home page \App\Http\Controllers";
            return view('frontend/home');
        }
        public function about(){
            // dd($_SERVER);
            return view('about');
            // include_once($_SERVER['DOCUMENT_ROOT'].'/resource/views/about.php');
        }
        public function user(){
            dd($_REQUEST);
            return view('user');
        }
        
    }
?>