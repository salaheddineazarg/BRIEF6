<?php
session_start();
class AboutController {
   public function index() 
  
   {  
    $data['title']="about page";

      View::load('about',$data);
      
   }
  }
  ?>