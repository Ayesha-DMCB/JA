<?php
class cls_accHeadSub{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function slct_accHSub($id){
		$result = $this->con()->query("select * from acc_subhead where acc_head = '$id' order by id desc");
		$row = $result->fetch_assoc();
		$hcode = $row['acc_subHead_code']+1000;
	    $total = $id+1000;
		
		$count = $result->num_rows;
		if($count == 0){
			return "$total";
		}
		else{
			return "$hcode";
		}
	}
	public function insert_accHeadSub(){
		//$sl_no = $this->con()->real_escape_string($_POST['sl_no']); 
		$acc_head = $this->con()->real_escape_string($_POST['acc_head']);
		$acc_subHead_code = $this->con()->real_escape_string($_POST['acc_subHead_code']);
		$acc_subHead_name = $this->con()->real_escape_string($_POST['acc_subHead_name']);
		
		$result = $this->con()->query("insert into acc_subhead(acc_head, acc_subHead_code, acc_subHead_name) values('$acc_head', '$acc_subHead_code', '$acc_subHead_name')");
		
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
	public function edit_accHeadSub(){
		$uid = $this->con()->real_escape_string($_POST['uid']);
		//$sl_no = $this->con()->real_escape_string($_POST['sl_no']);
		$acc_head = $this->con()->real_escape_string($_POST['acc_head']);
		$acc_subHead_code = $this->con()->real_escape_string($_POST['acc_subHead_code']);
		$acc_subHead_name = $this->con()->real_escape_string($_POST['acc_subHead_name']);
		
		$result = $this->con()->query("update acc_subhead set
			acc_head = '$acc_head',
			acc_subHead_code = '$acc_subHead_code',
			acc_subHead_name = '$acc_subHead_name'
			where id = '$uid'
		");
		if($result){
			return "Successfully updated your Data";
		}
		return "Error in inserting Data";
	}
	public function slct_accHeadSub(){
		$result = $this->con()->query("select * from acc_subhead where status = '1' order by acc_head");
		return $result;
	}
	public function delete_row($del_id){
		$result = $this->con()->query("delete from acc_subhead where id='$del_id'");
		return $result;
	}
	public function update_headSub($user_id){
		$result = $this->con()->query("select * from acc_subhead where id='$user_id'");
		return $result;
	}
}
?>