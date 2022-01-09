<?php
if($count==1){
  session_start();
  $_SESSION['isLoginOK']=true;
  $_SESSION ['username']=$email;
  header("refresh:1;url=home.php");
  }

?>