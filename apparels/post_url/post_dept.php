<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_deptName.class.php');

$dbClass = new dbClass();
$cls_deptName = new cls_deptName();
$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "add_dept":
	  echo $cls_deptName->insert_dept();
	break;
	case "edit_dept":
	  echo $cls_deptName->edit_dept();
	break;
}
?>