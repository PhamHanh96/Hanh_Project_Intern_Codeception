<?php

$conn = new mysqli('localhost', 'root', '', 'dat_ve');
mysqli_set_charset($conn, 'UTF8');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

class database
{
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'dat_ve');
        mysqli_set_charset($this->conn, 'UTF8');
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
