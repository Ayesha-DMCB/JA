<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_crVoucher.class.php');
$dbClass = new dbClass();

$cls_crVoucher = new cls_crVoucher();

$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "add_crVoucher":
	  echo $cls_crVoucher->insert_crVoucher();
	break;
	case "edit_crVoucher":
	  echo $cls_crVoucher->edit_crVoucher();
	break;
}

?>