<?php
session_start();
$uID = $_SESSION['uid'];

require_once('../functions/db_config.php');
require_once('../functions/cls_drVoucher.class.php');
$dbClass = new dbClass();

$cls_drVoucher = new cls_drVoucher();

$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "add_deVoucher":
	  echo $cls_drVoucher->insert_drVoucher($uID);
	break;
	case "edit_deVoucher":
	  echo $cls_drVoucher->edit_drVoucher();
	break;
}

?>