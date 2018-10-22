<?php
	require_once('../functions/db_config.php');
	require_once('../functions/cls_accHeadSSub.class.php');

	$cls_accHeadSSub = new cls_accHeadSSub();

	$id = "$_POST[id]";
	
	$result = $cls_accHeadSSub->slct_accHSSub($id);
	echo $result;
?>