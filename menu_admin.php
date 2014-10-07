<?php
$itms=0;
$msgs=0;
include 'connect.php';
$tbl_name = "items";
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
$sql = "SELECT * FROM $tbl_name ";
$result = mysql_query($sql);
$itms = mysql_num_rows($result);
$tbl_name = "customers";
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
$sql = mysql_query("SELECT SUM(status) as total FROM $tbl_name");
$row = mysql_fetch_array($sql);
$msgs = $row['total'];
?>
<div id="div2">
			Welcome Admin [<a href="logout.php"> logout </a>] <?php echo date("F jS, Y", strtotime(date("Y/m/d")));?>
	</div>
	<div id="div3">
			<div id="div3left">
				<dt id="dl1">Main Menu</dt>
				<dt id="dl2"><a href="main_login.php">Admin Home</a></dt>
				<dt id="dl2"><a href="index.php" target="_blank">View Site</a></dt>
				<dt id="dl2"><a href="logout.php">Logout</a></dt>
				<dt id="dl1">General Menu</dt>
				<dt id="dl2"><a href="addnew.php">Add New Vehicle</a></dt>
				<dt id="dl2"><a href="inv.php">Inventory <?php if($itms==0){echo '(No Record)';
																};
																if($itms<>0){echo '('.$itms.' Records)';
																};
														  ?></a></dt>
				<dt id="dl2"><a href="messages.php">Messages <?php 
																//if($msgs==0){echo '(No New Msg)';
																//};
																if($msgs<>0){echo '('.$msgs.' New)';
																};
														  ?></a></dt>
				<dt id="dl1">Admin Setting</dt>
				<dt id="dl2"><a href="changename.php">Change Admin Name</a></dt>
				<dt id="dl2"><a href="changepass.php">Change Password</a></dt>
				<dt id="dl2"><a href="changeinfo.php">Change Info</a></dt>
</div>
