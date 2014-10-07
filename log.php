<?php
// Create connection
include 'connect.php';


//establish the connection with the mySQL
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
//connect with db and count the rows

$sql = "SELECT * FROM $tbl_name ORDER BY id ASC";
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);
$row = mysql_fetch_array ($result);
$id = $row['id']; 

?>
