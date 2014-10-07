<?php
$submit = $_POST["Submit"];
$dir = $_POST["dir"];

if($submit=="Add"){

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
$view = $_POST["hidden_View"];


$target_path = $dir;

if (!file_exists($target_path)) {
    mkdir($target_path,0777); 
    echo "The directory $id was successfully created.";
    
} else {
    echo "The directory $id exists.";
}

include 'connect.php';
$tbl_name = "items";
//establish the connection with the mySQL
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
//connect with db and count the rows

mysql_query("INSERT INTO $tbl_name (id, year, make, model, price, body, engine, trans, ext, int_, mileage, vin, stock, carfax, note, drivetrain, fuel, doors, avaib, special, options, view  )
VALUES ('$id', '$year', '$make', '$model', '$price', '$body', '$engine', '$trans', '$ext', '$int_', '$mileage', '$vin', '$stock', '$carfax', '$note', '$drivetrain', '$fuel', '$doors', '$avaib', '$special', '$options', '$view')");
header("location: inv_view.php?ID=$id");



};


if($submit=="Cancel"){
rmdir($dir);
include 'inv.php';
};
?>