<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_empCat.class.php');

$dbClass = new dbClass();
$cls_empCat = new cls_empCat();
$identyKey =  $_POST['identyKey']; 

switch($identyKey){
	case "add_empCat":
	  echo $cls_empCat->insert_empCat();
	break;
	case "edit_empCat":
	  echo $cls_empCat->edit_empCat();
	break;
}
?>