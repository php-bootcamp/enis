<?php
class PostgreSQL extends SQL {
  use SQLCrud;
private $host;
private $port;
private $username;
private $password;
private $database;

public function __construct($host,$sername,$password,$database){
$this->host=$host;
$this->username=$username;
$this->password=$password;
$this->database=$database;

}

public function __destruct(){
    
}}



