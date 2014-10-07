<?php
include 'connect.php';
$con=mysqli_connect($host,$username,$password,$db_name);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_query($con,"
	DROP TABLE `customers`;
");
mysqli_query($con,"
 CREATE  TABLE  `$db_name`.`customers` (  `id` int( 11  )  NOT  NULL  AUTO_INCREMENT ,
 `firstName` text NOT  NULL ,
 `lastName` text NOT  NULL ,
 `email` text NOT  NULL ,
 `phone` text NOT  NULL ,
 `zip` text NOT  NULL ,
 `tradeIN` text NOT  NULL ,
 `stockNR` text NOT  NULL ,
 `note` text NOT  NULL ,
 `status` int( 5  )  NOT  NULL ,
 `date` date NOT  NULL ,
 PRIMARY  KEY (  `id`  ) ,
 KEY  `id` (  `id`  )  ) ENGINE  = InnoDB  DEFAULT CHARSET  = latin1;
");

mysqli_query($con,"SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
");

mysqli_query($con,"
INSERT INTO `$db_name`.`customers` SELECT * FROM `$db_name`.`customers_default`;
");

mysqli_close($con);
include 'main_login.php';
?>