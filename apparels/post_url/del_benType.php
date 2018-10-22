<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_benefitType.class.php');

$cls_benefitType = new cls_benefitType();
$id = "$_POST[id]";

$result = $cls_benefitType->delete_row($id);
echo $result;
?>