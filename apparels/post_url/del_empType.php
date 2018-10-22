<?php
	require_once('../functions/db_config.php');
	require_once('../functions/cls_empType.class.php');

	$cls_empType = new cls_empType();
	$id = "$_POST[id]";
	
	$result = $cls_empType->delete_row($id);
	echo $result;
?>