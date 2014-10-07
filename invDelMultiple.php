<?php 
include 'connect.php';
$tbl_name = "items";
//establish the connection with the mySQL
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());

function rrmdir($dir) {
   if (is_dir($dir)) {
     $objects = scandir($dir);
     foreach ($objects as $object) {
       if ($object != "." && $object != "..") {
         if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
       }
     }
     reset($objects);
     rmdir($dir);
   }
}

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
		$dir    = 'uploads/'.$id;
		rrmdir($dir);
	}
}

//$id=2;



include 'inv.php';
?>
