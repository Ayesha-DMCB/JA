<?php
class cls_accHeadSSub{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function slct_accHSSub($id){
		$result = $this->con()->query("select * from acc_subsub_head where acc_subHead = '$id' order by id desc");
		$row = $result->fetch_assoc();
		$hcode = $row['acc_subSub_Code']+1;
	    $total = $id+1;
		
		$count = $result->num_rows;
		if($count == 0){
			return "$total";
		}
		else{
			return "$hcode";
		}
	}
	public function insert_accHeadSSub(){
		//$sl_no = $this->con()->real_escape_string($_POST['sl_no']); 
		$acc_subHead = $this->con()->real_escape_string($_POST['acc_subHead']);
		$acc_subSub_Code = $this->con()->real_escape_string($_POST['acc_subSub_Code']);
		$acc_subSub_name = $this->con()->real_escape_string($_POST['acc_subSub_name']);
		
		$result = $this->con()->query("insert into acc_subsub_head(acc_subHead, acc_subSub_Code, acc_subSub_name) values('$acc_subHead', '$acc_subSub_Code', '$acc_subSub_name')");
		
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
	public function edit_accHeadSSub(){
		$uid = $this->con()->real_escape_string($_POST['uid']);
		//$sl_no = $this->con()->real_escape_string($_POST['sl_no']);
		$acc_subHead = $this->con()->real_escape_string($_POST['acc_subHead']);
		$acc_subSub_Code = $this->con()->real_escape_string($_POST['acc_subSub_Code']);
		$acc_subSub_name = $this->con()->real_escape_string($_POST['acc_subSub_name']);
		
		$result = $this->con()->query("update acc_subsub_head set
			acc_subHead = '$acc_subHead',
			acc_subSub_Code = '$acc_subSub_Code',
			acc_subSub_name = '$acc_subSub_name'
			where id = '$uid'
		");
		if($result){
			return "Successfully updated your Data";
		}
		return "Error in inserting Data";
	}
	public function slct_accHeadSSub(){
		$result = $this->con()->query("select * from acc_subsub_head where status = '1' order by acc_subHead ");
		return $result;
	}
	public function slct_Service(){
		$result = $this->con()->query("select * from acc_subsub_head where acc_subHead = '101000'");
		return $result;
	}
	public function slct_joinHead(){
		$result = $this->con()->query("select a.*,b.acc_subHead_name as sname from acc_subsub_head as a join acc_subhead as b on b.acc_subHead_code = a.acc_subHead group by a.acc_subHead");
		return $result;
	}
	public function delete_row($del_id){
		$result = $this->con()->query("delete from acc_subsub_head where id='$del_id'");
		return $result;
	}
	public function update_headSSub($user_id){
		$result = $this->con()->query("select * from acc_subsub_head where id='$user_id'");
		return $result;
	}
	public function slct_sHead($hid){
		$result = $this->con()->query("select * from acc_subsub_head where acc_subHead='$hid'");
		return $result;
	}
	public function slct_incm_head(){
		$result = $this->con()->query("select * from acc_subsub_head where acc_subHead='101000'");
		return $result;
	}
	public function slct_expn_head(){
		$result = $this->con()->query("select * from acc_subsub_head where acc_subHead='201000'");
		return $result;
	}
	public function slct_head($id){
		$result = $this->con()->query("select * from acc_subsub_head where acc_subHead='$id'");
		return $result;
	}
}
?>