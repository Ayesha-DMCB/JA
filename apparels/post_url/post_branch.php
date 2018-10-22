<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_branchName.class.php');

$dbClass = new dbClass();
$cls_branchName = new cls_branchName();
$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "add_branch":
	  echo $cls_branchName->insert_branch();
	break;
	case "edit_branch":
	  echo $cls_branchName->edit_branch();
	break;
}
?>