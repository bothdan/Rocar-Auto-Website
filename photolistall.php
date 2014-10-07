<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rocar Auto Sales|Photos</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<?php
$id_ = $_REQUEST['ID'];
include 'logs.php';
$sql = "SELECT * FROM $tbl_name WHERE id='$id_'";
$result = mysql_query($sql);
$row = mysql_fetch_array ($result);
$stock = $row['stock'];
$price = $row['price'];
$year = $row['year'];
$make = $row['make'];
$model = $row['model'];
?>

<div id="photo_container">
<div id="top">
    <div id="spanTxtTop"><?php echo $year.' '.$make.' '.$model.' - '.'$'.number_format($price);?></div>
	<div id="spanTxtTopLitle">Stock #: <?php echo $stock;?> Phone: 773-334-0025</div>
</div>
<br>
<br>
<br>
<br>
<br>

<?php
$dir    = 'uploads/'.$id_;
$files = scandir($dir);

$max = sizeof($files);
for($i = 0; $i < $max-2;$i++)
{
$target_path = $dir."/".$files[$i+2];
?>

<div id="term-defs">
<img  src="<?php echo $target_path ;?>  "  style="border:1px solid #E1E0E0;max-height:390px;min-height:390px;"/></div>
<?php
}
?>
<div id="photo_banner">
    <span id="spanTxt"><img src="imgs/logo.jpg" style="padding:5px;vertical-align:middle"/>5136 N. Western Ave. Chicago Illinois 60625. 773-334-0025 www.rocarautos.com</span>
</div>
</div>