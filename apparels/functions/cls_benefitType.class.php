<?php
class cls_benefitType{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function insert_benType(){
		$benefitType = $this->con()->real_escape_string($_POST['benefitType']);
		
		$result = $this->con()->query("insert into benefit_type(benefitType) values('$benefitType')");
		
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
	public function edit_benType(){
		$uid = $this->con()->real_escape_string($_POST['uid']); 
		$benefitType = $this->con()->real_escape_string($_POST['benefitType']);
		
		$result = $this->con()->query("update benefit_type set
			benefitType = '$benefitType'
			where id = '$uid'
		");
		if($result){
			return "Successfully updated your Data";
		}
		return "Error in inserting Data";
	}
	public function slct_benType(){
		$result = $this->con()->query("select * from benefit_type where status = '1'");
		return $result;
	}
	public function benType_list($id){
		$result = $this->con()->query("select * from benefit_type where id = '$id' ");
		return $result;
	}
	public function delete_row($del_id){
		$result = $this->con()->query("delete from benefit_type where id='$del_id'");
		return $result;
	}
}
?>