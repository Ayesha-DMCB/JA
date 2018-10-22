<?php
class cls_holyType{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function insert_holyType(){
		$holyType = $this->con()->real_escape_string($_POST['holyType']);
		
		$result = $this->con()->query("insert into holidayType(holyType) values('$holyType')");
		
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
	public function edit_holyType(){
		$uid = $this->con()->real_escape_string($_POST['uid']); 
		$holyType = $this->con()->real_escape_string($_POST['holyType']);
		
		$result = $this->con()->query("update holidayType set
			holyType = '$holyType'
			where id = '$uid'
		");
		if($result){
			return "Successfully updated your Data";
		}
		return "Error in inserting Data";
	}
	public function slct_holyType(){
		$result = $this->con()->query("select * from holidayType where status = '1'");
		return $result;
	}
	public function holyType_list($id){
		$result = $this->con()->query("select * from holidayType where id = '$id' ");
		return $result;
	}
	public function delete_row($del_id){
		$result = $this->con()->query("delete from holidayType where id='$del_id'");
		return $result;
	}
}
?>