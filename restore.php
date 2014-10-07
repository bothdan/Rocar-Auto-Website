<?php
include 'connect.php';
$con=mysqli_connect($host,$username,$password,$db_name);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_query($con,"
	DROP TABLE `items`;
");
mysqli_query($con,"
CREATE  TABLE  `$db_name`.`items` (  `id` int( 5  )  NOT  NULL  AUTO_INCREMENT ,
 `year` int( 4  )  NOT  NULL ,
 `make` text NOT  NULL ,
 `model` text NOT  NULL ,
 `price` int( 6  )  NOT  NULL ,
 `body` text NOT  NULL ,
 `engine` text NOT  NULL ,
 `trans` text NOT  NULL ,
 `ext` text NOT  NULL ,
 `int_` text NOT  NULL ,
 `mileage` int( 7  )  NOT  NULL ,
 `vin` text NOT  NULL ,
 `stock` int( 6  )  NOT  NULL ,
 `carfax` text NOT  NULL ,
 `note` text NOT  NULL ,
 `drivetrain` text NOT  NULL ,
 `fuel` text NOT  NULL ,
 `doors` int( 1  )  NOT  NULL ,
 `avaib` text NOT  NULL ,
 `special` varchar( 10  )  NOT  NULL ,
 `options` longtext NOT  NULL ,
 `view` int( 4  )  NOT  NULL ,
 
  PRIMARY  KEY (  `id`  ) ,
 KEY  `id` (  `id`  )  ) ENGINE  = InnoDB  DEFAULT CHARSET  = latin1;
");

mysqli_query($con,"SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
");

mysqli_query($con,"
INSERT INTO `$db_name`.`items` SELECT * FROM `$db_name`.`items_default`;
");

mysqli_close($con);


$dir="uploads";


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

rrmdir($dir);

$src="backup";
$dst="uploads";

function rcopy($src, $dst) {
  if (file_exists($dst)) rrmdir($dst);
  if (is_dir($src)) {
    mkdir($dst);
    $files = scandir($src);
    foreach ($files as $file)
    if ($file != "." && $file != "..") rcopy("$src/$file", "$dst/$file"); 
  }
  else if (file_exists($src)) copy($src, $dst);
}

rcopy($src, $dst);




include 'main_login.php';

?>