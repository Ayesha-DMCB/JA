<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_empType.class.php');

$dbClass = new dbClass();
$cls_empType = new cls_empType();
$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "add_empType":
	  echo $cls_empType->insert_empType();
	break;
	case "edit_empType":
	  echo $cls_empType->edit_empType();
	break;
}
?>