<?php
	require_once('../functions/db_config.php');
	require_once('../functions/cls_accHeadSSub.class.php');

	$cls_accHeadSSub = new cls_accHeadSSub();

	$id = "$_POST[str]";
	
	$result = $cls_accHeadSSub->slct_head($id);
	echo "<option>Select Acc Name---</option>";
	while($row = $result->fetch_assoc()){
?>
    <option value="<?php echo $row['acc_subSub_name']; ?>" id="<?php echo $row['acc_subSub_Code']; ?>"><?php echo $row['acc_subSub_name']; ?></option>

<?php		
	  //echo "<option id='$row['acc_subSub_Code']'>".$row['acc_subSub_name']."</option>";
	 }
	exit;
?>