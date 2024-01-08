<?php
//Start session
session_start();

//Call for connection to db
require_once('dbcon.php');

//Gets variables and checks if they are valid
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    if(str_contains($username, 'drop') || str_contains($password, 'drop')) {
        echo 'Não é permitido deletar bases de dados.';
    }
    else {

        //Makes intentionally SQL injection prone check to database
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        echo $sql;
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Login successful
            $_SESSION['username'] = $username;
            header("Location: restricted.php"); // Redirect to dashboard or any other page
        } else {
            // Login failed
            echo "Invalid username or password";
        }

    }
}

$conn->close();
?>