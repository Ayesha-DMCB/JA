<?php
	require_once('../functions/db_config.php');
	require_once('../functions/cls_accHead.class.php');

	$cls_accHead = new cls_accHead();
	$id = "$_POST[id]";
	
	$result = $cls_accHead->delete_head($id);
	echo $result;
?>