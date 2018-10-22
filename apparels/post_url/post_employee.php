<?php
session_start();
$uID = $_SESSION['uid'];

require_once('../functions/db_config.php');
require_once('../functions/cls_empInfo.class.php');
$dbClass = new dbClass();
$cls_empInfo = new cls_empInfo();

$identyKey =  $_POST['identyKey'];
 
switch($identyKey){
	case "newEmployee":
	   echo $cls_empInfo->new_employee($uID);
	break;
	case "addQuali":
	   echo $cls_empInfo->emp_qualification();
	break;
	case "addExper":
	   echo $cls_empInfo->emp_experience();
	break;
}

?>