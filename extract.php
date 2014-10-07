<?php
$sql = "SELECT * FROM $tbl_name WHERE id='$id'";
$result = mysql_query($sql);
$row = mysql_fetch_array ($result);
//$id = $row['id']; 
$year = $row['year'];
$make = $row['make'];
$model = $row['model'];
$price = $row['price'];
$body = $row['body']; 
$engine = $row['engine'];
$trans = $row['trans'];
$ext = $row['ext'];
$int_ = $row['int_'];
$mileage = $row['mileage']; 
$vin = $row['vin'];
$stock = $row['stock'];
$carfax = $row['carfax'];
$note = $row['note'];
$drivetrain = $row['drivetrain']; 
$fuel = $row['fuel'];
$doors = $row['doors'];
$avaib = $row['avaib'];
$special = $row['special'];
$options = $row['options'];
$view = $row['view'];
$photoContor = 0;

?>