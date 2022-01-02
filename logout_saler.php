<?php
    session_start();

    if(isset($_SESSION['LoginSl'])){
        unset($_SESSION['LoginSl']);
        header("location:login.php");
    }

?>