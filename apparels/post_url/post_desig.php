<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_designation.class.php');

$dbClass = new dbClass();
$cls_designation = new cls_designation();
$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "addDesig":
	  echo $cls_designation->insert_desig();
	break;
	case "editDesig":
	  echo $cls_designation->edit_desig();
	break;
}
?>