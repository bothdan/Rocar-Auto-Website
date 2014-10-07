<?php
$txt = 'Hello! Im interested in the '.$year.' '.$make.' '.$model.' you have listed on your website for '.'$'.number_format($price).' I would like to know more about this vehicle.';

?>
<form name="form1" method="post" action="detail_view_msg_action.php">
  <table width="95%" border="0" align="center">
    <tr> 
      <td colspan="2">Comments/Check Availability/Questions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    *Required</td>
    </tr>
    <tr> 
      <td colspan="2">
	  <input name="stocknr" type="hidden" value = "<?php echo $stock;?>">
	  <input name="id" type="hidden" value = "<?php echo $id;?>">
	  <textarea name="msg" style=" height:80px; width: 350px; min-width: 350px; max-width: 350px; resize: none;"><?php echo $txt;?></textarea></td>
    </tr>
    <tr> 
      <td>First name*</td>
      <td>Last name*</td>
    </tr>
    <tr> 
      <td><input name="FName" type="text" size="22" maxlength="35"></td>
      <td><input name="LName" type="text" size="22" maxlength="35"></td>
    </tr>
    <tr> 
      <td colspan="2">Email*</td>
    </tr>
    <tr> 
      <td colspan="2"><input name="email" type="text" size="52" maxlength="50"></td>
    </tr>
    <tr> 
      <td>Phone*</td>
      <td>ZIP</td>
    </tr>
    <tr> 
      <td><input name="phone" type="text" size="22" maxlength="35"></td>
      <td><input name="zip" type="text" size="22" maxlength="35"></td>
    </tr>
    <tr> 
      <td colspan="2"><input type="checkbox" name="checkboxTradein" value="checkbox">
        I have a trade-in</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>