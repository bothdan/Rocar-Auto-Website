<?php
$id = $_REQUEST['ID'];
//echo $id;
include 'connect.php';

//establish the connection with the mySQL
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
//connect with db and count the rows
//Connects to customers db
$tbl_name = "customers";
$sql = "SELECT * FROM $tbl_name WHERE id = '$id'";
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);
$row = mysql_fetch_array ($result);
$firstName = $row['firstName']; 
$lastName = $row['lastName']; 
$phone = $row['phone']; 
$email = $row['email']; 
$zip = $row['zip']; 
$tradeIN = $row['tradeIN'];
$stockNR = $row['stockNR'];
$note = $row['note'];
$date = $row['date'];
//set the message as read
mysql_query("UPDATE $tbl_name SET status='0' WHERE id='$id' ");

//connects to items db
$tbl_name2 = "items";
$sql2 = "SELECT * FROM $tbl_name2 WHERE stock = '$stockNR'";
$result2 = mysql_query($sql2);
$num_rows2 = mysql_num_rows($result2);
$row2 = mysql_fetch_array ($result2);
$year = $row2['year'];
$make = $row2['make'];
$model = $row2['model'];
$id_= $row2['id'];
//$photo1 = $row2['photo1'];
$dir    = 'uploads/'.$id_;

$files = scandir($dir);
//print_r($files);

$max = sizeof($files);

if($max>2){
$main_pic = $dir."/".$files[2];
};
if($max==2){
$main_pic=" ";
};

?>
<fieldset>
 <legend id="legend">Message Details</legend>
  <?php 
	if($main_pic){?>
		<div id="divMSGblk"><img src="<?php echo $main_pic ;?>  "width="160" /></div>
  <?php 
	;};
  ?>
  
  <div id="divMSGblk"><span id="txtblue">Msg about: </span><?php echo $year.' '.$make.' '.$model.' -  ';?><span id="txtblue">Stock #:</span><?php echo$stockNR;?><br><br><span id="txtblue">Name: </span><?php echo $firstName.' '.$lastName;?><br><span id="txtblue">e-Mail: </span><?php echo $email;?><br><span id="txtblue">Phone: </span><?php echo $phone;?></div><br>
  <br><div id="divMSGblk"><span id="txtblue">Message: </span><?php echo $note;?></div><br><br><br>
  <div id="divMSGblk"><span id="txtblue">Posted on: </span><?php echo date("F jS, Y", strtotime("$date"));?><br><span id="txtblue">Trade in: </span><?php echo $tradeIN;?></div>
  <br>
  <br>
  
  
  <div id="divMSGblk2">
  <form name="formmsgDel" method="post" action="messagesDel.php?ID=<?php echo $id;?>">
  <input id="btnDel" type="submit" name="SubmitDel" value="Delete" >
  </form>
  </div>
  <div id="divMSGblk2">
  <form name="formmsgBack" method="post" action="messages.php">
 
  <input id="btnCancel" type="submit" name="SubmitBack" value="Go Back" >
  </form>
  </div>
</fieldset>



