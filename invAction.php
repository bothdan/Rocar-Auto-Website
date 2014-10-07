<?php
$id = $_REQUEST['ID'];
$year = $_POST["textfield_Year"];
$stock = $_POST["textfield_Stock"];
$make = $_POST["textfield_Make"];
$vin = $_POST["textfield_Vin"];
$model = $_POST["textfield_Model"];
$carfax = $_POST["select_Carfax"];
$mileage = $_POST["textfield_Mileage"];
$doors = $_POST["select_Doors"];
$price = $_POST["textfield_Price"];
$drivetrain = $_POST["select_Drivetrain"];
$body = $_POST["textfield_Body"];
$fuel = $_POST["select_Fuel"];
$engine = $_POST["textfield_Engine"];
$special = $_POST["select_Specials"];
$trans = $_POST["select_Trans"];
$ext = $_POST["textfield_Ext"];
$int = $_POST["textfield_Int"];
$options = $_POST["textarea_Options"];
$note = $_POST["textarea_Notes"];
//$view = $_POST["hidden_View"];

//$Submit1 = $_POST["Submit1"];

$submit = $_POST["Submit"];

if($submit=="Update"){

include 'connect.php';
$tbl_name = "items";
//establish the connection with the mySQL
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
//connect with db and count the rows

mysql_query("UPDATE $tbl_name SET year='$year', make='$make', model='$model', price='$price', body='$body', engine='$engine', trans='$trans', ext='$ext', int_='$int', mileage='$mileage', vin='$vin', stock='$stock', carfax='$carfax', note='$note', drivetrain='$drivetrain', fuel='$fuel', doors='$doors', special='$special', options='$options' 
WHERE id='$id' ");

$dir = $_POST["dir"];
$files = unserialize($_POST['files']);

if (isset($_POST['checkbox2'])) 
{
	$array= ($_POST['checkbox2']);

$length = count($array);
for ($i = 0; $i < $length; $i++) {
	unlink($dir."/".$array[$i]);
}
}
include 'inv.php';
}

if($submit=="Delete"){
include 'connect.php';
$tbl_name = "items";
//establish the connection with the mySQL
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
//connect with db and count the rows

$sql = "DELETE FROM $tbl_name WHERE id='$id'";
$result = mysql_query($sql);

//$id=2;

$dir    = 'uploads/'.$id;
$files = scandir($dir);

$max = sizeof($files);
for($i = 0; $i < $max-2;$i++)
{
$target_path = $dir."/".$files[$i+2];
//delete the folder from server-keep unselected for demo site
unlink($target_path);

};

//delete the folder from server-keep unselected for demo site
rmdir($dir);
include 'inv.php';
};

if($submit=="Go Back"){
include 'inv.php';
};

if($submit=="Add"){
//echo $id;
header("location: inv_view.php?ID=$id");
};


?>