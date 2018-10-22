<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_benefitType.class.php');

$dbClass = new dbClass();
$cls_benefitType = new cls_benefitType();
$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "add_benType":
	  echo $cls_benefitType->insert_benType();
	break;
	case "edit_benType":
	  echo $cls_benefitType->edit_benType();
	break;
}
?>