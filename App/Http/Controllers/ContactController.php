<?php
namespace App\Http\Controllers;

    class ContactController{
        public function contact($id,$name){
            // dd($id,$name);
            return view('frontend/contact');
            
            
        }
        public function contactSubmit(){
            echo "contact submit page";
            dd($_REQUEST);
        }
    }
?>