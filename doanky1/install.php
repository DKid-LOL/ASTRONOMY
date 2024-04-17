<?php 

class Install {
    public $conn = null;
    public $host = "localhost";
    public $username = "root";
    public $password = "";

    public function __construct(){
        $this->conn = new mysqli($this->host, $this->username, $this->password);
    }

    public function getConn(){
        return $this->conn;
    }

    public function createDatabase(){
        $sql = "CREATE DATABASE IF NOT EXISTS DBastronomy1";
        if(!$this->conn->query($sql)){
            echo "Error creating database: ". $this->conn->error;
        }
        $this->conn->select_db("DBastronomy1");
    }

    public function createTables(){
        $sql = "CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL,
            password VARCHAR(40) NOT NULL,
            email VARCHAR(50) NOT NULL
        )";
        if(!$this->conn->query($sql)){
            echo "Error creating users table: ". $this->conn->error;
        }

        $sql = "CREATE TABLE IF NOT EXISTS Planets (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            discovered_date DATE,
            size VARCHAR(100),
            atmosphere TEXT,
            distance_sun DECIMAL(10,2),
            distance_earth DECIMAL(10,2)
        )";
        if(!$this->conn->query($sql)){
            echo "Error creating posts table: ". $this->conn->error;
        }

        $sql = "CREATE TABLE IF NOT EXISTS Categories (
            id INT AUTO_INCREMENT PRIMARY KEY,
            namename VARCHAR(50) NOT NULL  
        )";
        if(!$this->conn->query($sql)){
            echo "Error creating astronauts table: ". $this->conn->error;
        }

        $sql = "CREATE TABLE IF NOT EXISTS Constellations (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            description TEXT
        )";
        if(!$this->conn->query($sql)){
            echo "Error creating astronauts table: ". $this->conn->error;
        }

        $sql = "CREATE TABLE IF NOT EXISTS Comets (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            description TEXT
        )";
        if(!$this->conn->query($sql)){
            echo "Error creating astronauts table: ". $this->conn->error;
        }

        $sql = "CREATE TABLE IF NOT EXISTS Events (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            description TEXT
        )";
        if(!$this->conn->query($sql)){
            echo "Error creating astronauts table: ". $this->conn->error;
        }

        $sql = "CREATE TABLE IF NOT EXISTS Observatories (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            latitude DECIMAL(10,6),
            longitude DECIMAL(10,6),
            location TEXT
        )";
        if(!$this->conn->query($sql)){
            echo "Error creating astronauts table: ". $this->conn->error;
        }
    }
}

$install = new Install();

$install->createDatabase();

$install->createTables();