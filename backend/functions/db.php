<?php
class connectDB
{
    public $conn;
    private $hostName = "localhost";
    private $userName = "u7v6b8rgdda2g";
    private $password = "xn--82c8azatt7d.net";
    private $dbName = "dbtyye7cugbfvv";



    function __construct()
    {
        $this->conn = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
        $this->conn->set_charset("utf8");
        if (!$this->conn) {
            die("Connection failed" . mysqli_connect_error());
        }
    }
}
