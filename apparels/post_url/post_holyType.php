<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_holyType.class.php');

$dbClass = new dbClass();
$cls_holyType = new cls_holyType();
$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "add_htype":
	  echo $cls_holyType->insert_holyType();
	break;
	case "edit_htype":
	  echo $cls_holyType->edit_holyType();
	break;
}
?>