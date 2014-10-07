<?php 
$id = $_REQUEST['ID'];
include 'extract.php';
?>
<div id="div_details_view">
<br>

<div id="detailtitle">
<?php
echo "&nbsp;&nbsp;&nbsp;&nbsp;".$year.' '.$make.' '.$model.' - $ '.number_format($price);
?>
<br>

</div>
<div id="container">
	
		<div id="box-photo" class="box">
	  
						<div id="detailphoto">
							<span><?php include('photolist.php');?></span>
						</div>
	  
		</div>
	
	<div id="box-details" class="box">
  
					<div id="detailinfo">
						<?php
						include 'details_view_details.php';
						?>
					</div>
	</div>
  
	<div id="box-msg" class="box">
					<div >
						<?php
						include 'details_view_msg.php';
						?>
					</div>
	</div>
  
</div>
<?php
//view insert
include 'connect.php';
$tbl_name = 'items';
$con=mysqli_connect($host,$username,$password,$db_name);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $view++;

mysqli_query($con,"SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
");
 
mysqli_query($con,"UPDATE $tbl_name SET view =$view
WHERE id='$id' ");
mysqli_close($con);
?>


</div>
