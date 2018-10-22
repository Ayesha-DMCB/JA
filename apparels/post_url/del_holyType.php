<?php
	require_once('../functions/db_config.php');
	require_once('../functions/cls_holyType.class.php');

	$cls_holyType = new cls_holyType();
	$id = "$_POST[id]";
	
	$result = $cls_holyType->delete_row($id);
	echo $result;
?>