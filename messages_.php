<fieldset>
 <legend id="legend">Messages</legend>
<div id="divBtn">
<form name="formmsgDel2" method="post" action="messages.php">
<input id="btn" type="submit" name="Submit_All" value="Select All" >
<input id="btnCancel" type="submit" name="Submit_Cancel" value="Unselect All" >
</form>
</div>
<div id="divBtn">
<form name="formmsgDel" method="post" action="messagesDelMultiple.php">
<input id="btnDel" type="submit" name="Submit_Del" value="Delete" >
</div>
<?php 
//$check = "checked";
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
$tbl_name = 'customers';
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
<span id="spanMsg"><div id="divinfo1"></div><div id="divinfo2">Stock:</div><div id="divinfo3">Name:</div><div id="divinfo4">e-Mail:</div><div id="divinfo5">Message:</div><div id="divinfo6">Date:</div></span>

<?php
}
else{
?>
<span id="txtblue">
<?php
echo 'There are no messages.';
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
$firstName = $row['firstName']; 
$lastName = $row['lastName']; 
$email = $row['email']; 
$phone = $row['phone']; 
$tradeIN = $row['tradeIN']; 
$zip = $row['zip'];
$stockNR = $row['stockNR']; 
$note = $row['note'];
$status = $row['status']; 
//$date = $row['date']; 

$date = date('m/d/Y',strtotime($row['date']));

if (strlen($note) > 50)
   $note = substr($note, 0, 47) . '...';
if (strlen($email) > 20)
   $email = substr($email, 0, 17) . '...';
?>

<div id="divmsg">
  <?php
	if($id){
		  if($status==0){
		  ?>
		  <div id="divCont">
			<div id="divinfo1"><input type='checkbox' name='checkboxvar[]' value="<?php echo $id;?>" <?php echo $check;?>></div><a  href="messages_view.php?ID=<?php echo $id;?>" ><div id="divinfo2"><?php echo $stockNR;?></div><div id="divinfo3"><?php echo $firstName.' '.$lastName;?></div><div id="divinfo4"><?php echo $email;?></div><div id="divinfo5"><?php echo $note;?></div><div id="divinfo6"><?php echo $date;?></div></a>
		  </div>
		  <?php
		  };
		 if($status==1){
		  ?>
		  <div id="divCont">
		  <b>
			<div id="divinfo1"><input type="checkbox" name="checkboxvar[]" value="<?php echo $id;?>" <?php echo $check;?>></div><a  href="messages_view.php?ID=<?php echo $id;?>" ><div id="divinfo2"><?php echo $stockNR;?></div><div id="divinfo3"><?php echo $firstName.' '.$lastName;?></div><div id="divinfo4"><?php echo $email;?></div><div id="divinfo5"><?php echo $note;?></div><div id="divinfo6"><?php echo $date;?></div></a>
		  </b>
		  </div>
		  <?php
		  };
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