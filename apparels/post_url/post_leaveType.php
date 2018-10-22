<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_leaveType.class.php');

$dbClass = new dbClass();
$cls_leaveType = new cls_leaveType();
$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "add_lvType":
	  echo $cls_leaveType->insert_leaveType();
	break;
	case "edit_lvType":
	  echo $cls_leaveType->edit_leaveType();
	break;
}
?>