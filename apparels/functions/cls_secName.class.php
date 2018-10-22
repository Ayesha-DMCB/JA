<?php
class cls_secName{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function insert_sec(){
		$branch = $this->con()->real_escape_string($_POST['branch']);
		$dept = $this->con()->real_escape_string($_POST['dept']);
		$sec_name = $this->con()->real_escape_string($_POST['sec_name']);
		
		$result = $this->con()->query("insert into section(branch , dept, sec_name) values('$branch', '$dept', '$sec_name')");
		
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
	public function edit_sec(){ 
		$uid = $this->con()->real_escape_string($_POST['uid']); 
		$branch = $this->con()->real_escape_string($_POST['branch']);
		$dept = $this->con()->real_escape_string($_POST['dept']);
		$sec_name = $this->con()->real_escape_string($_POST['sec_name']);
		
		$result = $this->con()->query("update section set
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
	public function slct_sec(){
		$result = $this->con()->query("select * from section where status = '1' order by branch");
		return $result;
	}
	public function sec_list($id){
		$result = $this->con()->query("select * from section where id = '$id' ");
		return $result;
	}
	public function delete_row($del_id){
		$result = $this->con()->query("delete from section where id='$del_id'");
		return $result;
	}
}
?>