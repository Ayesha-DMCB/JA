<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_designation.class.php');

$cls_designation = new cls_designation();
$id = "$_POST[id]";

$result = $cls_designation->delete_row($id);
echo $result;
?>