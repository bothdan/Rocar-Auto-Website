<?php
include 'connect.php';
$tbl_name = "dealer";
//establish the connection with the mySQL
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
//connect with db and count the rows
$sql = "SELECT * FROM $tbl_name ORDER BY id ASC";
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);
$row = mysql_fetch_array ($result);
$id = $row['id']; 
$name = $row['name']; 
$phone = $row['phone']; 
$address = $row['address']; 
$url = $row['url']; 
 
?>
</form>
<form name="form1" method="post" action="changeinfoaction.php">
 <fieldset>
 <legend id="legend">Info</legend>
  Name:<br>
  <input name="namefield" type="text" value="<?php echo $name;?>" size="50" maxlength="35"><br><br>
  Phone:<br>
  <input name="phonefield" type="text" value="<?php echo $phone;?>" size="50" maxlength="35"><br><br>
  URL:<br>
  <input name="urlfield" type="text" value="<?php echo $url;?>" size="50" maxlength="50"><br><br>
  Address:<br>
  <textarea name="addressfield" style=" height:100px; width: 330px; min-width: 330px; max-width: 330px; resize: none;"><?php echo $address;?></textarea><br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <input id="btnSave" type="submit" name="Submit" value="Save">
  <input id="btnCancel" type="submit" name="Submit" value="Cancel" >
</fieldset>
</form>