<?php
class cls_factReg{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function insert_factReg(){
		$FactoryCode = $this->con()->real_escape_string($_POST['FactoryCode']);
		$FactoryName = $this->con()->real_escape_string($_POST['FactoryName']);
		$Adress = $this->con()->real_escape_string($_POST['Adress']);
		
		$result = $this->con()->query("insert into factoryreg(FactoryCode, FactoryName, Adress) values ('$FactoryCode', '$FactoryName', '$Adress')");
		
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
    public function slct_FactReg(){
		$result = $this->con()->query("select * from factoryreg where status = '1'");
		return $result;
	}
	/* public function edit_shift(){ 
		$uid = $this->con()->real_escape_string($_POST['uid']); 
		$branch = $this->con()->real_escape_string($_POST['branch']);
		$dept = $this->con()->real_escape_string($_POST['dept']);
		$sec_name = $this->con()->real_escape_string($_POST['sec_name']);
		
		$result = $this->con()->query("update factoryreg set
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
	
	public function shift_list($id){
		$result = $this->con()->query("select * from factoryreg where id = '$id' ");
		return $result;
	}
	public function delete_row($del_id){
		$result = $this->con()->query("delete from factoryreg where id='$del_id'");
		return $result;
	} */
}
?>