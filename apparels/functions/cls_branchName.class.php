<?php
class cls_branchName{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function insert_branch(){
		$branchName = $this->con()->real_escape_string($_POST['branchName']);
		
		$result = $this->con()->query("insert into tbl_branch(branchName) values('$branchName')");
		
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
	public function edit_branch(){
		$uid = $this->con()->real_escape_string($_POST['uid']); 
		$branchName = $this->con()->real_escape_string($_POST['branchName']);
		
		$result = $this->con()->query("update tbl_branch set
			branchName = '$branchName'
			where id = '$uid'
		");
		if($result){
			return "Successfully updated your Data";
		}
		return "Error in inserting Data";
	}
	public function slct_branch(){
		$result = $this->con()->query("select * from tbl_branch where status = '1'");
		return $result;
	}
	public function branch_list($id){
		$result = $this->con()->query("select * from tbl_branch where id = '$id' ");
		return $result;
	}
	public function delete_row($del_id){
		$result = $this->con()->query("delete from tbl_branch where id='$del_id'");
		return $result;
	}
}
?>