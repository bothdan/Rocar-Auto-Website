<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rocar Auto Sales</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
include 'banner.php';
?>
<?php
include 'menu.php';
?>
<div class="ex">

<div id="displayblock">
<br>
<br>

<form method="post" action="checklogin.php" name="form1">
	<div id="loginform">
		<div id="loginleft">
			<div id="loginleftrow">
				LOGIN
			</div>
			<div id="loginfinalL">
				<p>Username:</p>
				<input type="text" name="myusername" maxlength="30" size="14">
			</div>
			<div id="loginfinalR">
				<p>Password:</p>
				<input type="password" name="mypassword" maxlength="30" size="14">
			</div>
			
		</div>
		
		<div id="loginright">
			<br>
			<br>
			<br>
			<br>
			<br>
			<input type="submit" name="gobtn" value="  GO  ">

		</div>
	</div>
</form>
<br>
<br>
</div>

<?php
include('logs.php');

?>
</div>
<?php
include 'footer.php';
?>

</body>
</html>