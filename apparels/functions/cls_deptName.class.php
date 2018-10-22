<?php
class cls_deptName{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function insert_dept(){
		$branch = $this->con()->real_escape_string($_POST['branch']);
		$dept_name = $this->con()->real_escape_string($_POST['dept_name']);
		
		$result = $this->con()->query("insert into department(branch , dept_name) values('$branch' , '$dept_name')");
		
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
	public function edit_dept(){
		$uid = $this->con()->real_escape_string($_POST['uid']); 
		$branch = $this->con()->real_escape_string($_POST['branch']);
		$dept_name = $this->con()->real_escape_string($_POST['dept_name']);
		
		$result = $this->con()->query("update department set
			branch = '$branch',
			dept_name = '$dept_name'
			where id = '$uid'
		");
		if($result){
			return "Successfully updated your Data";
		}
		return "Error in inserting Data";
	}
	public function slct_dept(){
		$result = $this->con()->query("select * from department where status = '1' order by branch");
		return $result;
	}
	public function dept_list($id){
		$result = $this->con()->query("select * from department where id = '$id' ");
		return $result;
	}
	public function delete_row($del_id){
		$result = $this->con()->query("delete from department where id='$del_id'");
		return $result;
	}
}
?>