<?php
session_start();
class ContactController {
   public function index() 
  
   {  
    $data['title']="contact page";

      View::load('contact',$data);
      
   }
  }
  ?>