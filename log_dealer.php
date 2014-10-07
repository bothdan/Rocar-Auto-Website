<?php
// Create connection
include 'connect.php';

$tbl_name = "dealer";

//establish the connection with the mySQL
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
//connect with db and count the rows
$sql = "SELECT * FROM $tbl_name ";
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);
?>