<?php
class cls_designation{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function insert_desig(){
		$Designation = $this->con()->real_escape_string($_POST['Designation']);
		
		$result = $this->con()->query("insert into designation(Designation) values('$Designation')");
		
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
	public function edit_desig(){
		$uid = $this->con()->real_escape_string($_POST['uid']); 
		$Designation = $this->con()->real_escape_string($_POST['Designation']);
		
		$result = $this->con()->query("update designation set
			Designation = '$Designation'
			where id = '$uid'
		");
		if($result){
			return "Successfully updated your Data";
		}
		return "Error in inserting Data";
	}
	public function slct_desig(){
		$result = $this->con()->query("select * from designation where status = '1'");
		return $result;
	}
	public function desig_list($id){
		$result = $this->con()->query("select * from designation where id = '$id' ");
		return $result;
	}
	public function delete_row($del_id){
		$result = $this->con()->query("delete from designation where id='$del_id'");
		return $result;
	}
}
?>