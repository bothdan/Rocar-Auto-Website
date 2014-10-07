<?php
include 'connect.php';

mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());

$sql = "SELECT * FROM $tbl_name ORDER BY id DESC";
$result = mysql_query($sql);
$row1 = mysql_fetch_array ($result);

$idMAX = $row1['id']; 


$sql = "SELECT * FROM $tbl_name ORDER BY id ASC";
$result = mysql_query($sql);
$row2 = mysql_fetch_array ($result);
$idMIN = $row2['id'];

include 'logs.php';


$i=$idMIN;
do{


$sql = "SELECT * FROM $tbl_name WHERE id='$i' ";
$result = mysql_query($sql);
$row = mysql_fetch_array ($result);

$id = $row['id']; 
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


$photoContor = 0;

if($special =='Yes'||$special =='yes')
{
//=====================================================================================
?>
<div id="displayblock2">

<div id="cellphoto">
<?php
	$no_pic=0;
		$dir    = 'uploads/'.$id;
		
		$files = scandir($dir);
		
		$photoContor = count($files)-2;
		if($photoContor<>0)
		{
		$no_pic=1;
		$main_pic = $dir."/".$files[2];
		
		}
		
		if($photoContor==0){
		$no_pic=2;
		}
	?>
<?php
	if($no_pic==1){
?>
		<br> 
			<a  href="details_view.php?ID=<?php echo $id;?>" > 
			<img id="rollover" src="<?php echo $main_pic ;?>  "width="150" /> </a> 
		<br> 
		<a href="details_view.php?ID=<?php echo $id;?>"> 
			<?php echo $photoContor.' photos' ;?> </a> 
<?php 
	};
?>


<?php
	if($no_pic==2){
	
?> 
		<br>
		<a href="details_view.php?ID=<?php echo $id;?>" > <img  src="data:image/jpeg;base64,<?php echo base64_encode( $no_photo );?>   " width="152" height="100" /></a>
<?php
	};
?>
</div>
<div id="cellinfo">
<br>
<span id="cellBigTxt"><span id="big"><a href="details_view.php?ID=<?php echo $id;?>"><?php echo $year.' '.$make.' '.$model ;?></span><br><br></a></span>
<span id="cellSmallTxt">
<?php 
if($ext)
	{
		echo $ext.', ';
	};
if($doors)
	{
		echo $doors.' doors, ';
	};
if($drivetrain)
	{
		echo $drivetrain.', ';
	};
if($body)
	{
		echo $body.', ';
	};
?>
<br>
<?php	
if($trans)
	{
		echo $trans.', ';
	};
if($engine)
	{
		echo $engine.', ';
	};
?>
<br><br>
<?php
if($stock)
	{
		echo 'Stock# '.$stock.' ';
	};
?>
<br><br>
<?php
if($vin)
	{
		echo 'VIN: '.$vin.' ';
	};
?>
<br>
<?php
		//echo 'ListID: '.$listID;
	
?>
<br>
</span>
</div>

<div id="cellprice">
<span>
<?php echo '$'.number_format($price) ;?>
<br>
</span>
<span id ="regularSpan">
<?php echo number_format($mileage).' mi.' ;?>
</span>
</div>


</div>
<?php
//=====================================================================================
};

$i++;
} while($i<($idMAX+1));
?>