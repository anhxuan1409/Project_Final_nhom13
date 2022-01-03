<?php
    session_start();

    if(isset($_SESSION['ADLoginOK'])){
        unset($_SESSION['ADLoginOK']);
        header("location:logad.php");
    }

?>