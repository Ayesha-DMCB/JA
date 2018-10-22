<?php
	require_once('../functions/db_config.php');
	require_once('../functions/cls_leaveType.class.php');

	$cls_leaveType = new cls_leaveType();
	$id = "$_POST[id]";
	
	$result = $cls_leaveType->delete_row($id);
	echo $result;
?>