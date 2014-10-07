 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin | Rocar Auto Sales</title>
<link href="css/styleadmin.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="div1">
Admin Panel
</div>
	<div id="div2">
	Welcome Admin [<a href="#"> logout </a>] <?php echo date("Y/m/d") ;?>
	</div>

	<div id="div3">
	<div id="div3left">
		
		<dt id="dl1">Main Menu</dt>
		<dt id="dl2"><a href="main_login.php">Admin Home</a></dt>
		<dt id="dl2"><a href="index.php" target="_blank">View Site</a></dt>
		<dt id="dl2"><a href="logout.php">Logout</a></dt>
		<dt id="dl1">General Menu</dt>
		<dt id="dl2"><a href="addnew.php">Add New Vehicle</a></dt>
		<dt id="dl2"><a href="view.php">View Inventory</a></dt>
		<dt id="dl2"><a href="edit.php">Edit Inventory</a></dt>
		<dt id="dl2"><a href="delete.php">Delete Vehicle</a></dt>
		<dt id="dl1">Admin Setting</dt>
		<dt id="dl2"><a href="changename.php">Change Admin Name</a></dt>
		<dt id="dl2"><a href="changepass.php">Change Password</a></dt>
		<dt id="dl2"><a href="changeinfo.php">Change Info</a></dt>
		
	</div>
	<div id="div3right">
	<?php include 'right.php';?>
	</div>
	</div>

	<div id="div4">
	&copy; All Rights Reserved &nbsp;Dan Both
	</div>




</body>
</html>