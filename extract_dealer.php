<?php

$sql = "SELECT * FROM $tbl_name WHERE id=1";
$result = mysql_query($sql);
$row = mysql_fetch_array ($result);

$_id = $row['id']; 
$user = $row['user'];
$pass = $row['pass'];
$name = $row['name'];
$phone = $row['phone'];
$address = $row['address'];
$url = $row['url'];
$no_photo = $row['no_photo']; 
$specialPhoto = $row['specialPhoto'];


?>