<?php
session_start();
include("connection.php");
include("head.php");
if (!isset($_SESSION['isLoginOK'])) {
    header("location:login.php");
}
?>

    