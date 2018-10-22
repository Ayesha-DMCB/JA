<?php
require_once('../functions/db_config.php');
require_once('../functions/cls_secName.class.php');


$cls_secName = new cls_secName();
$id = "$_POST[id]";

$result = $cls_secName->delete_row($id);
echo $result;
?>