<?php
$dir    = 'uploads/'.$id;
$files = scandir($dir);
$max = sizeof($files);
if($max>2){
$main_pic = $dir."/".$files[2];
};
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
//print_r($files);
?>
</div>
<div >
<div class='main-inner'>

<div class="divred">
<?php 
	if($no_pic==1)
		{?>
			<a  href="photolistall.php?ID=<?php echo $id;?>" target="_blank"><img src="<?php echo $main_pic ;?>  "  style="visibility: visible;top: 0px;left: 0px;overflow:hidden;max-height:280px;min-height:280px;max-width:390px;" /></a>
		<?php
		};
	if($no_pic==2)
		{?>
			<img  src="data:image/jpeg;base64,<?php echo base64_encode( $no_photo ) ;?>  " style="visibility: visible;top: 0px;left: 0px;overflow:hidden;max-height:280px;min-height:280px;max-width:390px;" />
		<?php 
		};
		?>
			
			
</div>
<br>
<?php 
if($no_pic==1){
for($i = 0; $i < $max-2;$i++)
{
$target_path = $dir."/".$files[$i+2];

?>
<a class="thumbnail" href="details_view.php?ID=<?php echo $id;?>"><img src="<?php echo $target_path ;?>  "  width="70px" border="0" /><span><img src="<?php echo $target_path ;?>  " /><br /></span></a>
<?php 
};
};
?>

</div>
</div>