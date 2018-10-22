<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_eduType.class.php');

$dbClass = new dbClass();
$cls_eduType = new cls_eduType();
$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "add_eduType":
	  echo $cls_eduType->insert_eduType();
	break;
	case "edit_eduType":
	  echo $cls_eduType->edit_eduType();
	break;
}
?>