<?php
	require_once('../functions/db_config.php');
	require_once('../functions/cls_eduType.class.php');

	$cls_eduType = new cls_eduType();
	$id = "$_POST[id]";
	
	$result = $cls_eduType->delete_row($id);
	echo $result;
?>