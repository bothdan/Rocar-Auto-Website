<?php 
include 'connect.php';
$tbl_name = "customers";
//establish the connection with the mySQL
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
if (isset($_POST['checkboxvar'])) 
{
	$array= ($_POST['checkboxvar']);
	$length = count($array);
	
	for ($i = 0; $i < $length; $i++) {
		$id = $array[$i];
		//echo 'id='.$array[$i]."<br>";
		

		//connect with db and count the rows
		$sql = "DELETE FROM $tbl_name WHERE id='$id'";
		$result = mysql_query($sql);
	}
}
include 'messages.php';
?>




