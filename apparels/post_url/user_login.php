<?php
	require_once('../functions/db_config.php');
	require_once("../functions/cls_admin_users.class.php");

	$cls_admin_users = new cls_admin_users();
	$username = "$_POST[username]";
	$password = "$_POST[password]";
	
	$result = $cls_admin_users->user_login($username, $password);
	echo $result;
?>