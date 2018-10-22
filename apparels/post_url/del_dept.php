<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_deptName.class.php');

$cls_deptName = new cls_deptName();
$id = "$_POST[id]";

$result = $cls_deptName->delete_row($id);
echo $result;
?>