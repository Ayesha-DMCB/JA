<?php
	require_once('../functions/db_config.php');
	require_once('../functions/cls_accHeadSub.class.php');

	$cls_accHeadSub = new cls_accHeadSub();
	$id = "$_POST[id]";
	
	$result = $cls_accHeadSub->delete_row($id);
	echo $result;
?>