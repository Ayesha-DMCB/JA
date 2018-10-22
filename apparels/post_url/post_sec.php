<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_secName.class.php');

$dbClass = new dbClass();
$cls_secName = new cls_secName();
$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "add_sec":
	  echo $cls_secName->insert_sec();
	break;
	case "edit_sec":
	  echo $cls_secName->edit_sec();
	break;
}
?>