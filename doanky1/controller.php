<?php

require_once "connect.php";

class Controller{
    private $conn = null;

    public function __construct(){
        $this->conn = (new Connection)->getConn();
    }

    public function isPost(){
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    public function isGet(){
        return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

    public function getConn(){
        return $this->conn;
    }
}