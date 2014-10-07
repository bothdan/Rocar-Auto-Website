<?php
//$id = $_REQUEST['ID'];
//echo $id;
include 'connect.php';

//establish the connection with the mySQL
mysql_connect($host, $username, $password) or die("can't connect");
mysql_select_db($db_name) or die(mysql_error());
//connect with db and count the rows
//Connects to customers db
$tbl_name = "items";
$sql = "SELECT * FROM $tbl_name ORDER BY id DESC";
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);
$row = mysql_fetch_array ($result);

$id=$row['id'];

//mysql_close($sql);

$id=$id+1;

$year = 0;
$make = "";
$model = "";
$price = 0;
$body = ""; 
$engine = "";
$trans = "";
$ext = "";
$int_ = "";
$mileage = 0; 
$vin = "";
$stock = 0;
$carfax = "";
$note = "";
$drivetrain = ""; 
$fuel = "";
$doors = 0;
$avaib = "";
$special = "";
$options = "";
$view = 0;

//mysqli_connect($host, $username, $password) or die("can't connect");
//mysqli_select_db($db_name) or die(mysqli_error());

$dir    = 'uploads/'.$id;
$filename = $dir;

if (file_exists($filename)) {
$files = scandir($dir);
$max = sizeof($files);
for($i = 0; $i < $max-2;$i++)
	{
	$j=$i+1;
	$target_path = $dir."/".$files[$i+2];
	$length = strlen($files[$i+2]);
	$file_name_full = $files[$i+2];
		if($length<10){
		$file_name = $files[$i+2];
		}
		else{
		$file_ext = substr($files[$i+2], -4);
		$file_begin = substr($files[$i+2], 0, 5);
		$file_name = $file_begin.".".$file_ext;
		}
};
};
if (!file_exists($filename)) {
 mkdir($filename,0777); 
 $target_path="";
 $file_name ="";
$file_name_full="";
 
};
//print_r($files);
//header("location: inv_view.php?ID=$id");
?>



<fieldset>
 <legend id="legend">Vehicle Details</legend>
 
<form name="formInv" method="post" action="invAction2.php?ID=<?php echo $id;?>">
	<div id="divMSGblk2">
	<input id="btnSave" type="submit" name="Submit" value="Add" >
	
	<input id="btnCancel" type="submit" name="Submit" value="Cancel" >
	</div>	
	<br>
	<br>
<table border="0" >
    
	<tr>
        <td id="cell" >
            <span>Year</span>
        </td>
        
    <td id="cell" > 
        <span><input name="textfield_Year" type="text" value="<?php echo $year ; ?>" size="30" maxlength="30">
      </span>
        </td>
        <td  id="cell" >
            <span>Stock nr:</span>
        </td>
        
    <td  id="cell" > 
        <span><input name="textfield_Stock" type="text" value="<?php echo $stock ; ?>" size="30" maxlength="30">
      </span>
        </td>
    <td  id="cell" style="vertical-align: top;" rowspan="11"> 
            
        </td>
    </tr>
	
	
    <tr>
        <td  id="cell" >
            <span>Make:</span>
        </td>
        
    <td  id="cell" > 
        <span><input name="textfield_Make" type="text" value="<?php echo $make ; ?>" size="30" maxlength="30">
      </span>
        </td>
        <td  id="cell" >
            <span>VIN:</span>
        </td>
        
    <td  id="cell" > 
        <span><input name="textfield_Vin" type="text" value="<?php echo $vin ; ?>" size="30" maxlength="30">
      </span>
        </td>
    
    </tr>
	
	
    <tr>
        <td  id="cell" >
            <span>Model:</span>
        </td>
        
    <td  id="cell" > 
        <span><input name="textfield_Model" type="text" value="<?php echo $model ; ?>" size="30" maxlength="30">
      </span>
        </td>
        <td  id="cell" >
            <span>Carfax:</span>
        </td>
        
    <td  id="cell" > 
        <span><?php 
	$sel1_1 = " ";
	$sel2_1 = "selected";
	if($carfax=="Yes"||$carfax=="yes"){
	$sel1_1 = "selected";
	$sel2_1 = " ";
	};
	if($carfax=="No"||$carfax=="no"){
	$sel1_1 = " ";
	$sel2_1 = "selected";
	};
	?>
        <select name="select_Carfax" size="1">
          <option <?php echo $sel1_1;?>>Yes</option>
          <option <?php echo $sel2_1;?>>No</option>
        </select>
      </span>
        </td>
    
    </tr>
	
	
    <tr>
        <td  id="cell" >
            <span>Mileage:</span>
        </td>
        
    <td  id="cell" > 
        <span><input name="textfield_Mileage" type="text" value="<?php echo $mileage ; ?>" size="30" maxlength="30">
      </span>
        </td>
        <td  id="cell" >
            <span>Doors:</span>
        </td>
        
    <td  id="cell" > 
        <span><?php 
	$sel1_5 = " ";
	$sel2_5 = " ";
	$sel3_5 = " ";
	$sel4_5 = "selected";
		
	if($doors==1){
	$sel1_5 = "selected";
	$sel2_5 = " ";
	$sel3_5 = " ";
	$sel4_5 = " ";
	};
	if($doors==2){
	$sel1_5 = " ";
	$sel2_5 = "selected";
	$sel3_5 = " ";
	$sel4_5 = " ";
	};
	if($doors==3){
	$sel1_5 = " ";
	$sel2_5 = " ";
	$sel3_5 = "selected";
	$sel4_5 = " ";
	};
	if($doors==4){
	$sel1_5 = " ";
	$sel2_5 = " ";
	$sel3_5 = " ";
	$sel4_5 = "selected";
	};
	
	?>
        <select name="select_Doors" size="1">
          <option <?php echo $sel1_5;?>>1</option>
          <option <?php echo $sel2_5;?>>2</option>
		  <option <?php echo $sel3_5;?>>3</option>
          <option <?php echo $sel4_5;?>>4</option>
        </select>
      </span>
        </td>
    
    </tr>
	
	
    <tr>
        <td  id="cell" >
            <span>Price:</span>
        </td>
        
    <td  id="cell" > 
        <span><input name="textfield_Price" type="text" value="<?php echo $price ; ?>" size="30" maxlength="30">
      </span>
        </td>
        <td  id="cell" >
            <span>Drivetrain:</span>
        </td>
        
    <td  id="cell" > 
        <span><?php 
	$sel1_3 = "selected";
	$sel2_3 = " ";
	$sel3_3 = " ";
	$sel4_3 = " ";
	
	if($drivetrain=="FWD"){
	$sel1_3 = "selected";
	$sel2_3 = " ";
	$sel3_3 = " ";
	$sel4_3 = " ";
	};
	if($drivetrain=="RWD"){
	$sel1_3 = " ";
	$sel2_3 = "selected";
	$sel3_3 = " ";
	$sel4_3 = " ";
	};
	if($drivetrain=="AWD"){
	$sel1_3 = " ";
	$sel2_3 = " ";
	$sel3_3 = "selected";
	$sel4_3 = " ";
	};
	if($drivetrain=="4x4"){
	$sel1_3 = " ";
	$sel2_3 = " ";
	$sel3_3 = " ";
	$sel4_3 = "selected";
	};
	?>
        <select name="select_Drivetrain" size="1">
          <option <?php echo $sel1_3;?>>FWD</option>
          <option <?php echo $sel2_3;?>>RWD</option>
		  <option <?php echo $sel3_3;?>>AWD</option>
          <option <?php echo $sel4_3;?>>4x4</option>
        </select>
      </span>
        </td>
    
    </tr>
	
	
    <tr>
        <td  id="cell" >
            <span>Body:</span>
        </td>
        
    <td  id="cell" > 
        <span><input name="textfield_Body" type="text" value="<?php echo $body ; ?>" size="30" maxlength="30">
      </span>
        </td>
        <td  id="cell" >
            <span>Fuel:</span>
        </td>
        
    <td  id="cell" > 
         <span><?php 
	$sel1_4 = "selected";
	$sel2_4 = " ";
	$sel3_4 = " ";
	$sel4_4 = " ";
	
	if($fuel=="Gasoline"||$fuel=="gasoline"){
	$sel1_4 = "selected";
	$sel2_4 = " ";
	$sel3_4 = " ";
	$sel4_4 = " ";
	};
	if($fuel=="Diesel"||$fuel=="diesel"){
	$sel1_4 = " ";
	$sel2_4 = "selected";
	$sel3_4 = " ";
	$sel4_4 = " ";
	};
	if($fuel=="Hybrid"||$fuel=="hybrid"){
	$sel1_4 = " ";
	$sel2_4 = " ";
	$sel3_4 = "selected";
	$sel4_4 = " ";
	};
	if($fuel=="Electric"||$fuel=="electric"){
	$sel1_4 = " ";
	$sel2_4 = " ";
	$sel3_4 = " ";
	$sel4_4 = "selected";
	};
	?>
        <select name="select_Fuel" size="1">
          <option <?php echo $sel1_4;?>>Gasoline</option>
          <option <?php echo $sel2_4;?>>Diesel</option>
		  <option <?php echo $sel3_4;?>>Hybrid</option>
          <option <?php echo $sel4_4;?>>Electric</option>
        </select>
      </span>
        </td>
    
    </tr>
	
	
    <tr>
        <td  id="cell" >
            <span>Engine:</span>
        </td>
        
    <td  id="cell" > 
        <span><input name="textfield_Engine" type="text" value="<?php echo $engine ; ?>" size="30" maxlength="30">
      </span>
        </td>
        <td  id="cell" >
            <span>Specials:</span>
        </td>
        
    <td  id="cell" > 
	<span><?php 
	$sel1 = " ";
	$sel2 = "selected";
	if($special=="Yes"||$special=="yes"){
	$sel1 = "selected";
	$sel2 = " ";
	};
	if($special=="No"||$special=="no"){
	$sel1 = " ";
	$sel2 = "selected";
	};
	?>
        <select name="select_Specials" size="1">
          <option <?php echo $sel1;?>>Yes</option>
          <option <?php echo $sel2;?>>No</option>
        </select>
      </span>
        </td>
    
    </tr>
	
	
    <tr>
        <td  id="cell" >
            <span>Transmision:</span>
        </td>
        
    <td  id="cell" > 
       <span><?php 
	$sel1_2 = "selected";
	$sel2_2 = " ";
	if($trans=="Auto"){
	$sel1_2 = "selected";
	$sel2_2 = " ";
	};
	if($trans=="Manual"){
	$sel1_2 = " ";
	$sel2_2 = "selected";
	};
	?>
        <select name="select_Trans" size="1">
          <option <?php echo $sel1_2;?>>Auto</option>
          <option <?php echo $sel2_2;?>>Manual</option>
        </select>
      </span>
        </td>
        <td  id="cell">
            <span>&nbsp;</span>
        </td>
        <td  id="cell">
            <span>&nbsp;</span>
        </td>
       
    </tr>
	
	
    <tr>
        <td  id="cell" >
            <span>Exterior Color:</span>
        </td>
        
    <td  id="cell" > 
        <span><input name="textfield_Ext" type="text" value="<?php echo $ext ; ?>" size="30" maxlength="30">
      </span>
        </td>
        <td  id="cell" >
            <span>Views:</span>
        </td>
        <td  id="cell" >
            <span id="txt20"><?php echo $view;?></span><span> times</span>
			
        </td>
       
    </tr>
	
	
    <tr>
        <td  id="cell" >
            <span>Interior Color:</span>
        </td>
        
    <td  id="cell" > 
        <span><input name="textfield_Int" type="text" value="<?php echo $int_ ; ?>" size="30" maxlength="30">
      </span>
        </td>
        <td  id="cell" >
            <span>&nbsp;</span>
        </td>
        <td  id="cell" >
            <span>&nbsp;</span>
        </td>
        
    </tr>
	
	
    <tr>
        <td  id="cell" >
            <span>Options:</span>
        </td>
        
    <td  id="cell" > 
        <span><textarea name="textarea_Options" style=" height:150px; width: 210px; min-width: 210px; max-width: 210px; resize: none;"><?php echo $options ; ?></textarea>
      </span>
        </td>
        <td  id="cell" >
            <span>Notes:</span>
        </td>
        
    <td  id="cell" > 
        <span><textarea name="textarea_Notes" style=" height:150px; width: 210px; min-width: 210px; max-width: 210px; resize: none;"><?php echo $note ; ?></textarea>
      </span>
        </td>
    
    </tr>
	
</table>
<br>
<?php
//$url = "add_photo.php?ID=$id&year=$year&make=$make&model=$model";
?>



<input type='hidden' name='dir' value="<?php echo $dir; ?>" />



</div>
</form>	
</fieldset>

