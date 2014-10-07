<?php
$name = $_POST["namefield"];
$phone = $_POST["phonefield"];
$url = $_POST["urlfield"];
$address = $_POST["addressfield"];
$submit = $_POST["Submit"];

if($submit=="Save"){
include 'connect.php';
$tbl_name = "dealer";
//establish the connection with the mySQL
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
//connect with db and count the rows


//mysql_query("INSERT INTO $tbl_name VALUES ('1', '', '','$name', '$phone', '$address', '$url', '', '')") ; 
mysql_query("UPDATE $tbl_name SET name='$name', phone='$phone', address='$address', url='$url'
WHERE id='1' ");
include 'main_login.php';
}
if($submit=='Cancel'){
include 'main_login.php';
}


//echo $submit.$name.$phone.$url.$address;
?>