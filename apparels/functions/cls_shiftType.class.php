<?php
class cls_shiftType{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function insert_shift(){
		$shiftName = $this->con()->real_escape_string($_POST['shiftName']);
		$startTime = $this->con()->real_escape_string($_POST['startTime']);
		$endTime = $this->con()->real_escape_string($_POST['endTime']);
		$lateAllowed = $this->con()->real_escape_string($_POST['lateAllowed']);
		$absentAllowed = $this->con()->real_escape_string($_POST['absentAllowed']);
		$weekend1 = $this->con()->real_escape_string($_POST['weekend1']);
		$weekend2 = $this->con()->real_escape_string($_POST['weekend2']);
		$shiftType = $this->con()->real_escape_string($_POST['shiftType']);
		
		$result = $this->con()->query("insert into tbl_shift(shiftName , startTime, endTime, lateAllowed, absentAllowed, weekend1, weekend2, shiftType) values('$shiftName', '$startTime', '$endTime', '$lateAllowed', '$absentAllowed', '$weekend1', '$weekend2', '$shiftType')");
		
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
	public function edit_shift(){ 
		$uid = $this->con()->real_escape_string($_POST['uid']); 
		$branch = $this->con()->real_escape_string($_POST['branch']);
		$dept = $this->con()->real_escape_string($_POST['dept']);
		$sec_name = $this->con()->real_escape_string($_POST['sec_name']);
		
		$result = $this->con()->query("update tbl_shift set
			branch = '$branch',
			dept = '$dept',
			sec_name = '$sec_name'
			where id = '$uid'
		");
		if($result){
			return "Successfully updated your Data";
		}
		return "Error in inserting Data";
	}
	public function slct_shift(){
		$result = $this->con()->query("select * from tbl_shift where status = '1'");
		return $result;
	}
	public function shift_list($id){
		$result = $this->con()->query("select * from tbl_shift where id = '$id' ");
		return $result;
	}
	public function delete_row($del_id){
		$result = $this->con()->query("delete from tbl_shift where id='$del_id'");
		return $result;
	}
}
?>