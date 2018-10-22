<?php
class cls_empType{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function insert_empType(){
		$empType = $this->con()->real_escape_string($_POST['empType']);
		
		$result = $this->con()->query("insert into emp_type(empType) values('$empType')");
		
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
	public function edit_empType(){
		$uid = $this->con()->real_escape_string($_POST['uid']); 
		$empType = $this->con()->real_escape_string($_POST['empType']);
		
		$result = $this->con()->query("update emp_type set
			empType = '$empType'
			where id = '$uid'
		");
		if($result){
			return "Successfully updated your Data";
		}
		return "Error in inserting Data";
	}
	public function slct_empType(){
		$result = $this->con()->query("select * from emp_type where status = '1'");
		return $result;
	}
	public function empType_list($id){
		$result = $this->con()->query("select * from emp_type where id = '$id' ");
		return $result;
	}
	public function delete_row($del_id){
		$result = $this->con()->query("delete from emp_type where id='$del_id'");
		return $result;
	}
}
?>