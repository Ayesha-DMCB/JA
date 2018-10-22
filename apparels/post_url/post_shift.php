<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_shiftType.class.php');

$dbClass = new dbClass();
$cls_shiftType = new cls_shiftType();
$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "add_shift":
	  echo $cls_shiftType->insert_shift();
	break;
	case "edit_shift":
	  echo $cls_shiftType->edit_shift();
	break;
}
?>