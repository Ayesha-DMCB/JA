<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_salMatrix.class.php');

$dbClass = new dbClass();
$cls_salMatrix = new cls_salMatrix();

$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "update_salMatrix":
	  echo $cls_salMatrix->update_salMatrix();
	break;
}
?>