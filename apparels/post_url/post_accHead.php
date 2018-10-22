<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_accHead.class.php');

$dbClass = new dbClass();
$cls_accHead = new cls_accHead();

$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "add_acc_head":
	  echo $cls_accHead->insert_accHead();
	break;
	case "edit_acc_head":
	  echo $cls_accHead->edit_accHead();
	break;
}

?>