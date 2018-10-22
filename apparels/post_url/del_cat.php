<?php
	require_once('../functions/db_config.php');
	require_once('../functions/cls_empCat.class.php');

	$cls_empCat = new cls_empCat();
	$id = "$_POST[id]";
	
	$result = $cls_empCat->delete_row($id);
	echo $result;
?>