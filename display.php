<div id="display">
	<?php
	$listID=0;
	do{
	include('extract.php');
	if(($make)AND($year))
	{
	$listID++;
	?>
	<div id="displayblock2">
		<div id="cellphoto">
		
		<?php
		$no_pic=0;
		$dir    = 'uploads/'.$id;
		
		$files = scandir($dir);
		
		$photoContor = count($files)-2;
		if($photoContor<>0)
		{
		$no_pic=1;
		$main_pic = $dir."/".$files[2];
		
		}
		
		if($photoContor==0){
		$no_pic=2;
		}
	?>

	
		
		<?php
			if($no_pic==1){
		?>
				<br> 
					<a  href="details_view.php?ID=<?php echo $id;?>" > 
					<img id="rollover" src= "<?php echo $main_pic;?> " width="150" /> </a> 
				<br> 
				<a href="details_view.php?ID=<?php echo $id;?>"> 
					<?php echo $photoContor.' photos' ;?> </a> 
		<?php 
			};
		?>


		<?php
			if($no_pic==2){
		?> 
				<br>
				<a href="details_view.php?ID=<?php echo $id;?>" > <img  src="data:image/jpeg;base64,<?php echo base64_encode( $no_photo );?>   " width="152" height="100" /></a>
		<?php
			};
		?>
		</div>
	<div id="cellinfo">
	<br>
	<span id="cellBigTxt"><span id="big"><a href="details_view.php?ID=<?php echo $id;?>"><?php echo $year.' '.$make.' '.$model ;?></span><br><br></a></span>
	<span id="cellSmallTxt">
	<?php 
	if($ext){echo $ext.', ';
		};
	if($doors){echo $doors.' doors, ';
		};
	if($drivetrain){echo $drivetrain.', ';
		};
	if($body){echo $body.', ';
		};
	?>
	<br>
	<?php	
	if($trans){echo $trans.', ';
		};
	if($engine){echo $engine.', ';
		};
	?>
	<br><br>
	<?php
	if($stock){echo 'Stock# '.$stock.' ';
		};
	?>
	<br><br>
	<?php
	if($vin){echo 'VIN: '.$vin.' ';
		};
	?>
	<br>
	<br>
	</span>
	</div>

	<div id="cellprice">
	<span>
	<?php echo '$'.number_format($price) ;?>
	<br>
	</span>
	<span id ="regularSpan">
	<?php echo number_format($mileage).' mi.' ;?>
	</span>
	</div>

	<div id="cellspecial">
	<?php
	if($special =="Yes"||$special =="yes"){
	?>
	<img  src="data:image/jpeg;base64,<?php echo base64_encode( $specialPhoto );?>   " width="110"  />
	<?php
	};
	?>
	</div>
	</div>
	<?php
	};
	?>
				
	<?php
	$id++;
	}while($id < ($idMax+1));
?>	