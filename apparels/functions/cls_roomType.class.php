<?php
class cls_roomType{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function insert_roomType(){
		$sl_no = $this->con()->real_escape_string($_POST['sl_no']); 
		$room_type = $this->con()->real_escape_string($_POST['room_type']);
		
		$result = $this->con()->query("insert into room_type(sl_no, room_type) values('$sl_no', '$room_type')");
		
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error in inserting Data";
	}
	public function edit_roomType(){
		$uid = $this->con()->real_escape_string($_POST['uid']); 
		$sl_no = $this->con()->real_escape_string($_POST['sl_no']); 
		$room_type = $this->con()->real_escape_string($_POST['room_type']);
		
		$result = $this->con()->query("update room_type set
			sl_no = '$sl_no',
			room_type = '$room_type'
			where id = '$uid'
		");
		if($result){
			return "Successfully updated your Data";
		}
		return "Error in inserting Data";
	}
	public function slct_room_type(){
		$result = $this->con()->query("select * from room_type where status = '1'");
		return $result;
	}
	public function room_listF($floor){
		$result = $this->con()->query("select * from room_type where floor_no = '$floor' ");
		return $result;
	}
	public function delete_rtype($del_id){
		$result = $this->con()->query("delete from room_type where id='$del_id'");
		return $result;
	}
	public function update_rinfo($user_id){
		$result = $this->con()->query("select * from room_type where id='$user_id'");
		return $result;
	}
}
?>