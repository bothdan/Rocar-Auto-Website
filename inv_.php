<fieldset>
<legend id="legend">Inventory</legend>
<div id="divBtn">
<form name="formmsgDel2" method="post" action="inv.php">
<input id="btn" type="submit" name="Submit_All" value="Select All" >
<input id="btnCancel" type="submit" name="Submit_Cancel" value="Unselect All" >
</form>
</div>
<div id="divBtn">
<form name="formmsgDel" method="post" action="invDelMultiple.php">
<input id="btnDel" type="submit" name="Submit_Del" value="Delete" >
</div>
<?php 
$check = "";
if(isset($_POST["Submit_Cancel"] ))
     {
       $check = "";
	 }
if(isset($_POST["Submit_All"] ))
     {
       $check = "checked";
	 }
?>
<?php
include 'connect.php';
$tbl_name = 'items';
//establish the connection with the mySQL
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
//connect with db and count the rows
$sql = "SELECT * FROM $tbl_name ORDER BY id DESC";
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);
$row = mysql_fetch_array ($result);
$i = $row['id'];
?>
<br><br>
<?php
if($i){
?>
<span id="spanMsg"><div id="divinfo1"></div><div id="divinfo2-1">Stock:</div><div id="divinfo3-1">Year:</div><div id="divinfo4-1">Make:</div><div id="divinfo5-1">Model:</div><div id="divinfo6-1">Color:</div><div id="divinfo7-1">VIN:</div><div id="divinfo8-1">Mileage:</div><div id="divinfo9-1">Price:</div></span>

<?php
}
else{
?>
<span id="txtblue">
<?php
echo 'There are no records.';
?>
</span>
<?php
}
do{
$sql = "SELECT * FROM $tbl_name WHERE id = '$i' ORDER BY id DESC;";
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);
$row = mysql_fetch_array ($result);
$id = $row['id'];
$year = $row['year'];
$make = $row['make'];
$model = $row['model'];
$price = $row['price'];
$ext = $row['ext'];
$mileage = $row['mileage']; 
$vin = $row['vin'];
$stock = $row['stock'];
?>
<div id="divmsg">
  <?php
	if($id){
		  ?>
		  <div id="divCont">
			<div id="divinfo1"><input type='checkbox' name='checkboxvar[]' value="<?php echo $id;?>" <?php echo $check;?>></div><a  href="inv_view.php?ID=<?php echo $id;?>" ><div id="divinfo2-1"><?php echo $stock;?></div><div id="divinfo3-1"><?php echo $year;?></div><div id="divinfo4-1"><?php echo $make;?></div><div id="divinfo5-1"><?php echo $model;?></div><div id="divinfo6-1"><?php echo $ext;?></div><div id="divinfo7-1"><?php echo $vin;?></div><div id="divinfo8-1"><?php echo number_format($mileage);?></div><div id="divinfo8-1"><?php echo '$'.number_format($price) ;?></div></a>
		  </div>
		  <?php
		  
		 
	};
  ?>
</a>
</div>
<?php
$i = ($i-1);
}while($i > 0);
?>
</form>
</fieldset>