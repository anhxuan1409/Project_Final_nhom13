<?php
if($count==1){
  session_start();
  $_SESSION['isLoginOK']=true;
  $_SESSION ['username']=$email;
  header("refresh:1;url=home.php");
  }
else{
   $_SESSION['isLoginOK']=false;
   header("refresh:2;url=login.php");}
?>