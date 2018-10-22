<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_accHeadSSub.class.php');
$dbClass = new dbClass();
	
	$cls_accHeadSSub = new cls_accHeadSSub();
	$hid = $_POST['str'];
	
	$result = $cls_accHeadSSub->slct_sHead($hid);
	  echo "<option>Select---</option>";
	while($row = $result->fetch_assoc()){
	  //echo "<option>".$row['item_name']."</option>";
	 echo '<option value="'.$row["acc_subSub_Code"].'">'.$row['acc_subSub_name'].'</option>';
	 }
	exit;	
?>