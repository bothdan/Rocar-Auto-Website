<?php
include 'connect.php';
$con=mysqli_connect($host,$username,$password,$db_name);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_query($con,"
	DROP TABLE `dealer`;
");
mysqli_query($con,"
CREATE TABLE  `$db_name`.`dealer` (
`id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
 `user` TEXT NOT NULL ,
 `pass` TEXT NOT NULL ,
 `name` TEXT NOT NULL ,
 `phone` TEXT NOT NULL ,
 `address` TEXT NOT NULL ,
 `url` TEXT NOT NULL ,
 `no_photo` LONGBLOB NOT NULL ,
 `specialPhoto` LONGBLOB NOT NULL ,
PRIMARY KEY (  `id` ) ,
KEY  `id` (  `id` )
) ENGINE = INNODB DEFAULT CHARSET = latin1;
");

mysqli_query($con,"SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
");

mysqli_query($con,"
INSERT INTO `$db_name`.`dealer` SELECT * FROM `$db_name`.`dealer_default`;
");

mysqli_close($con);
include 'main_login.php';
?>