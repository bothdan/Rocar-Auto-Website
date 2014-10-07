<?php
ob_start();
include 'log_dealer.php';

$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];
					 
//echo 'user: '.$myusername.' pass: '.$mypassword;
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sqlx = "SELECT * FROM $tbl_name WHERE user='$myusername' and pass='$mypassword'";
$resultx = mysql_query($sqlx);
$count=mysql_num_rows($resultx);
$rowx = mysql_fetch_array ($resultx);
$attempt=0;
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
 
$_SESSION['myusername']==$myusername;
$_SESSION['mypassword']==$mypassword;
 
header("location:login_success.php");
}
else {
//$attempt++;
header("location:login.php");
}
ob_end_flush();
?>