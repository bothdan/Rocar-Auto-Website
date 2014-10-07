<?php
$msg = $_POST['msg'];
$FName = $_POST['FName'];
$LName = $_POST['LName'];
$email = $_POST['email'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$stocknr = $_POST['stocknr'];
$date = date("Y/m/d");
if (isset($_POST['checkboxTradein'])) 
{
$chBox = "yes";
}
else{
$chBox ="no";
}
include 'connect.php';
$tbl_name = "customers";
//establish the connection with the mySQL
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());


//echo $msg.$FName.$LName.$email.$zip.$phone.$chBox.$stocknr;

mysql_query("INSERT INTO $tbl_name (id, firstName, lastName, email, phone, zip, tradeIN, stockNR, note, status, date )
VALUES ('','$FName', '$LName', '$email', '$phone', '$zip', '$chBox', '$stocknr', '$msg', '1', '$date')");
?>

<div class="ex">

<div id="displayblock">
<br>
<br>

<span id="msgTxt">Thank you <?php echo $FName;?>, Your message was sent.  Soon we will contact you regarding your inquires.</span>
<p id="msgTxt"><a href = "details_view.php?ID=<?php echo $id;?>&MainPhoto=1">Back to your search</a></p>
<br>
<br>
</div>