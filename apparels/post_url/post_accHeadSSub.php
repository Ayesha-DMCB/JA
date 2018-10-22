<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_accHeadSSub.class.php');
$dbClass = new dbClass();

$cls_accHeadSSub = new cls_accHeadSSub();

$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "add_accHeadSSub":
	   echo $cls_accHeadSSub->insert_accHeadSSub();
	break;
	case "edit_accHeadSSub":
	   echo $cls_accHeadSSub->edit_accHeadSSub();
	break;
}

?>