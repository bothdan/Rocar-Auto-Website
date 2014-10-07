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
	<?php include 'menu_admin.php';?>
		<div id="div3right">
			
			
			
			<?php
				$id = $_REQUEST['ID'];
				//header("location: inv_view.php?ID=$id");
				include 'connect.php';
				$tbl_name = 'items';
				//establish the connection with the mySQL
				mysql_connect($host, $username, $password) or die("can't connect");
				mysql_select_db($db_name) or die(mysql_error());
				//connect with db and count the rows
				$sql = "SELECT * FROM $tbl_name WHERE id=$id";
				$result = mysql_query($sql);
				$num_rows = mysql_num_rows($result);
				$row = mysql_fetch_array ($result);
				$year = $row['year'];
				$make = $row['make'];
				$model = $row['model'];
			?>
		
		<form enctype="multipart/form-data" action="uploader.php" method="POST">
		<?php $user = 1;?>
		
		<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
		<input type="hidden" name="textfield_user" value="<?php echo $id ; ?>" />
		<span>Vehicle: <?php echo $year." ".$make." ".$model;?></span><br><br>
		Choose a file to upload: <br><br>
		<input name="uploadedfile" type="file" /><br /><br />
		<input type="submit" value="Upload File" />
		</form>
		</div>
</div>
	<div id="div4">
			&copy; All Rights Reserved &nbsp;Dan Both
	</div>
</body>
</html>





