<?php
// Create connection
include 'connect.php';



//establish the connection with the mySQL
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
//connect with db and count the rows

$sql2 = "SELECT * FROM $tbl_name ORDER BY id DESC";
$result2 = mysql_query($sql2);
//$num_rows2 = mysql_num_rows($result2);
$row2 = mysql_fetch_array ($result2);
$idMax = $row2['id']; 
//mysql_close($con);
?>
