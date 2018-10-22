<?php
class cls_eduType{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function insert_eduType(){
		$eduType = $this->con()->real_escape_string($_POST['eduType']);
		
		$result = $this->con()->query("insert into edu_type(eduType) values('$eduType')");
		
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
	public function edit_eduType(){
		$uid = $this->con()->real_escape_string($_POST['uid']); 
		$eduType = $this->con()->real_escape_string($_POST['eduType']);
		
		$result = $this->con()->query("update edu_type set
			eduType = '$eduType'
			where id = '$uid'
		");
		if($result){
			return "Successfully updated your Data";
		}
		return "Error in inserting Data";
	}
	public function slct_eduType(){
		$result = $this->con()->query("select * from edu_type where status = '1'");
		return $result;
	}
	public function eduType_list($id){
		$result = $this->con()->query("select * from edu_type where id = '$id' ");
		return $result;
	}
	public function delete_row($del_id){
		$result = $this->con()->query("delete from edu_type where id='$del_id'");
		return $result;
	}
}
?>