<?php
//Data for connection to db
$host = "localhost";
$username = "";
$password = "";

$database = "pap_exercicio4";

//Connection to db using data
$conn = new mysqli($host, $username, $password, $database);

//If connection fails throw error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>