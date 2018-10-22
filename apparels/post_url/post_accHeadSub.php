<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_accHeadSub.class.php');
$dbClass = new dbClass();

$cls_accHeadSub = new cls_accHeadSub();

$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "add_acc_headSub":
	  echo $cls_accHeadSub->insert_accHeadSub();
	break;
	case "edit_acc_headSub":
	  echo $cls_accHeadSub->edit_accHeadSub();
	break;
}

?>