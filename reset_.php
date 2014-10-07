<?php
$reset = $_POST["Reset"];


if($reset=="Reset User"){
include 'restore_user.php';
}
if($reset == "Reset Records"){
include 'restore.php';
}
if($reset == "Reset Customers"){
include 'restore_customers.php';
}
?>