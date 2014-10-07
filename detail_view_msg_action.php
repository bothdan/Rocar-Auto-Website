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

<?php 
$id = $_POST['id'];
if($_POST['FName'] and $_POST['LName'] and $_POST['email'] and $_POST['phone']){
include 'if_op1.php';
}else{
include 'if_op2.php';
}
?>

<?php
include('logs.php');

?>
</div>
<?php
include 'footer.php';
?>

</body>
</html>