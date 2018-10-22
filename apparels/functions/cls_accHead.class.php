<?php
class cls_accHead{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function insert_accHead(){
		//$sl_no = $this->con()->real_escape_string($_POST['sl_no']); 
		$acc_headCode = $this->con()->real_escape_string($_POST['acc_headCode']);
		$acc_headName = $this->con()->real_escape_string($_POST['acc_headName']);
		
		$result = $this->con()->query("insert into acc_head(acc_headCode, acc_headName) values('$acc_headCode', '$acc_headName')");
		
		if($result){
		return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
	public function edit_accHead(){
		$uid = $this->con()->real_escape_string($_POST['uid']);
		//$sl_no = $this->con()->real_escape_string($_POST['sl_no']);
		$acc_headCode = $this->con()->real_escape_string($_POST['acc_headCode']);
		$acc_headName = $this->con()->real_escape_string($_POST['acc_headName']);
		
		$result = $this->con()->query("update acc_head set
			acc_headCode = '$acc_headCode',
			acc_headName = '$acc_headName'
			where id = '$uid'
		");
		if($result){
			return "Successfully updated your Data";
		}
		return "Error in inserting Data";
	}
	public function slct_accHead(){
		$result = $this->con()->query("select * from acc_head where status = '1'");
		return $result;
	}
	public function delete_head($del_id){
		$result = $this->con()->query("delete from acc_head where id='$del_id'");
		return $result;
	}
	public function update_head($user_id){
		$result = $this->con()->query("select * from acc_head where id='$user_id'");
		return $result;
	}
}
?>