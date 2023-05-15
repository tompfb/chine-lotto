<?php
$servername = "localhost";
$username = "u7v6b8rgdda2g";
$password = "xn--82c8azatt7d.net";
$database = "dbtyye7cugbfvv";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "blog";

$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_query($conn, "SET NAMES 'utf8'");
if (!$conn) {
    printf("Errormessage: %s\n", $mysqli->error);
}

