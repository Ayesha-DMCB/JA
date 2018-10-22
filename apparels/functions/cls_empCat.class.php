<?php
class cls_empCat{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function insert_empCat(){
		$empCat = $this->con()->real_escape_string($_POST['empCat']);
		$grp = $this->con()->real_escape_string($_POST['grp']);
		
		$result = $this->con()->query("insert into empCat(empCat , grp) values('$empCat' , '$grp')");
		
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
	public function edit_empCat(){
		$uid = $this->con()->real_escape_string($_POST['uid']); 
		$empCat = $this->con()->real_escape_string($_POST['empCat']);
		$grp = $this->con()->real_escape_string($_POST['grp']);
		
		$result = $this->con()->query("update empCat set
			empCat = '$empCat',
			grp = '$grp'
			where id = '$uid'
		");
		if($result){
			return "Successfully updated your Data";
		}
		return "Error in inserting Data";
	}
	public function slct_empCat(){
		$result = $this->con()->query("select * from empCat where status = '1'");
		return $result;
	}
	public function empCat_list($id){
		$result = $this->con()->query("select * from empCat where id = '$id' ");
		return $result;
	}
	public function delete_row($del_id){
		$result = $this->con()->query("delete from empCat where id='$del_id'");
		return $result;
	}
}
?>