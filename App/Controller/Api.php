<?php
namespace App\Controller;
use System\Controller as Controller;

class Api extends Controller{
	public function __construct(){
		
    }

    public function authentication(){
        if($this->req->getMethod() == "POST"){
            $username = $this->req->Post("username");
            $password = $this->req->Post("password");
            
        }else{
            
        }
    }
}