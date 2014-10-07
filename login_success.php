<?php 
session_start();
if(!$_SESSION['myusername']){
header("location:main_login.php");
}
?>