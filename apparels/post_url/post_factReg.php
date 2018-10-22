<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_factReg.class.php');

$dbClass = new dbClass();
$cls_factReg = new cls_factReg();
$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "factoryReg":
	  echo $cls_factReg->insert_factReg();
	break;
	/* case "edit_sec":
	  echo $cls_secName->edit_sec();
	break; */
}
?>