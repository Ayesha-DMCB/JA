<?php
class cls_leaveType{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function insert_leaveType(){
		$leaveType = $this->con()->real_escape_string($_POST['leaveType']);
		$days = $this->con()->real_escape_string($_POST['days']);
		
		$result = $this->con()->query("insert into leaveType(leaveType , days) values('$leaveType' , '$days')");
		
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
	public function edit_leaveType(){
		$uid = $this->con()->real_escape_string($_POST['uid']); 
		$leaveType = $this->con()->real_escape_string($_POST['leaveType']);
		$days = $this->con()->real_escape_string($_POST['days']);
		
		$result = $this->con()->query("update leaveType set
			leaveType = '$leaveType',
			days = '$days'
			where id = '$uid'
		");
		if($result){
			return "Successfully updated your Data";
		}
		return "Error in inserting Data";
	}
	public function slct_leaveType(){
		$result = $this->con()->query("select * from leaveType where status = '1'");
		return $result;
	}
	public function leaveType_list($id){
		$result = $this->con()->query("select * from leaveType where id = '$id' ");
		return $result;
	}
	public function delete_row($del_id){
		$result = $this->con()->query("delete from leaveType where id='$del_id'");
		return $result;
	}
}
?>