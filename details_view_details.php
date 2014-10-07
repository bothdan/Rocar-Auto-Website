 <table border="0" width="95%" >
    
	
	<tr id='rowwhite'>
        <td width="50%">
            <span id="label">Body Style:</span>
        </td>
        <td width="50%">
            <span id="label_details"><?php echo $body;?></span>
        </td>
    </tr>
    <tr id='rowgray'>
        <td>
            <span id="label">Exterior/Interior Color:</span>
        </td>
        <td>
            <span id="label_details"><?php echo $ext."/".$int_;?></span>
        </td>
    </tr>
    <tr id='rowwhite'>
        <td>
            <span id="label">Stock #:</span>
        </td>
        <td>
            <span id="label_details"><?php echo $stock;?></span>
        </td>
    </tr>
    <tr id='rowgray'>
        <td>
            <span id="label">VIN:</span>
        </td>
        <td>
            <span id="label_details"><?php echo $vin;?></span>
        </td>
    </tr>
    <tr id='rowwhite'>
        <td>
            <span id="label">Fuel:</span>
        </td>
        <td>
            <span id="label_details"><?php echo $fuel;?></span>
        </td>
    </tr>
    <tr id='rowgray'>
        <td>
            <span id="label">Engine:</span>
        </td>
        <td>
            <span id="label_details"><?php echo $engine;?></span>
        </td>
    </tr>
    <tr id='rowwhite'>
        <td>
            <span id="label">Transmission:</span>
        </td>
        <td>
            <span id="label_details"><?php echo $trans;?></span>
        </td>
    </tr>
    <tr id='rowgray'>
        <td>
            <span id="label">Drivetrain:</span>
        </td>
        <td>
            <span id="label_details"><?php echo $drivetrain;?></span>
        </td>
    </tr>
	<tr id='rowwhite'>
        <td>
            <span id="label">Doors:</span>
        </td>
        <td>
            <span id="label_details"><?php echo $doors;?></span>
        </td>
    </tr>
	<tr>
        <td width="100%" colspan="2">
            <p><span id="label1">Features: </span><span id="label2"><?php echo $options;?></span></p>
			
        </td>
    </tr>
	<tr>
        <td width="100%" colspan="2">
            <p><span id="label1">Note: </span><span id="label2"><?php echo $note;?></span></p>
			
        </td>
    </tr>
</table>