<?php

class Connection {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "DBastronomy1";
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    public function getConn() {
        return $this->conn;
    }
}