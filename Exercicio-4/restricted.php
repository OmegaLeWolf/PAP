<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

echo 'FLAG=[7249452]';
?>