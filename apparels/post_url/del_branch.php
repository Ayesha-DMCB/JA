<?php
	require_once('../functions/db_config.php');
	require_once('../functions/cls_branchName.class.php');

	$cls_branchName = new cls_branchName();
	$id = "$_POST[id]";
	
	$result = $cls_branchName->delete_row($id);
	echo $result;
?>