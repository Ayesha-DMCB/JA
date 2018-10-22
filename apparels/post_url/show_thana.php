<?php
	require_once('../functions/db_config.php');
	require_once('../functions/cls_disUpazila.class.php');
	
	$dbconfig = new dbClass();
	$cls_disUpazila = new cls_disUpazila();

	$id = $_POST['str'];
	
	$result = $cls_disUpazila->select_district($id);
	while($row = $result->fetch_assoc()){
	  echo "<option>".$row['name']."</option>";
	}
	exit;	
?>