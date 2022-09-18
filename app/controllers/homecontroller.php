<?php

namespace MVC\controllers;

use MVC\core\controller;

use Dcblogdev\PdoWrapper\Database;


  class homecontroller extends controller  {



 public function index(){
    
         $title= "home index";
         $h1="abram farouk";
    $this->view("home/index" ,['title'=>$title ,'h1'=>$h1]);
    

 }


 
public function add(){
    echo "abram farouk shaker";

}

public function db(){
    // make a connection to mysql here
$options = [
    //required
    'username' => '',
    'database' => '',
    //optional
    'password' => '',
    'type' => 'mysql',
    'charset' => 'utf8',
    'host' => 'dev',
    'port' => '3309'
];

$db = new Database($options);


}
}



