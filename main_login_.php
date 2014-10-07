<?php
//echo 'Main Login page';


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
$user = $row['user'];
$pass = $row['pass'];
$no_photo = $row['no_photo'];
$specialPhoto = $row['specialPhoto'];
$pass2 = str_repeat ('*', strlen ($pass));
?>
</form>
<form name="form2" method="post" action="reset_.php">
<fieldset>
 <legend id="legend">Main Login Page</legend>
  <span id="displayinfo">User:    <?php echo $user;?></span><br><br>
  <span id="displayinfo">Password:<?php echo $pass2;?></span><br><br>
  <span id="displayinfo">Name:	  <?php echo $name;?></span><br><br>
  <span id="displayinfo">Phone:	  <?php echo $phone;?></span><br><br>
  <span id="displayinfo">URL:	  <?php echo $url;?></span><br><br>
  <span id="displayinfo">Address: <?php echo $address;?></span><br>
  <br>
  <span id="displayinfo">No photo: <img id="roll" src="data:image/jpeg;base64,<?php echo base64_encode($no_photo) ;?>  " /> </span>
  <br>
  <span id="displayinfo">Special: <img id="roll" src="data:image/jpeg;base64,<?php echo base64_encode($specialPhoto) ;?>  " /> </span>
  <br>
  <br>
  <br>
  <br>
  <input id="btnSave" type="submit" name="Reset" value="Reset User">
  <input id="btnSave" type="submit" name="Reset" value="Reset Records">
  <input id="btnSave" type="submit" name="Reset" value="Reset Customers">
 
 </fieldset>
 </form>

