<?php
	class cls_empExperience{
		public function con(){
			$dbClass = new dbClass();
			return $dbClass->connection();
		}
		
		public function insert_user(){
			$fullname = $this->con()->real_escape_string($_POST['fullname']); 
			$username = $this->con()->real_escape_string($_POST['username']);
			$password = $this->con()->real_escape_string($_POST['password']);
			$user_type = $this->con()->real_escape_string($_POST['user_type']);
				
			$email_q = $this->con()->query("select * from tbl_admin_users where username = '$username'");
			$email_count = $email_q->num_rows;
			if($email_count != 0){
				return "User already exists";
			}	
				
			$result = $this->con()->query("insert into experience(fullname, username, password, user_type) values ('$fullname','$username', '$password', '$user_type')");
			
			if($result){
				return "Successfully inserted your Data";
			}
			return "Error Inserting Data";
		}

		public function user_list(){
			$result = $this->con()->query("select * from experience where status = '1' ");
			return $result;
		}
		public function user_details($user_id){
			$result = $this->con()->query("select * from experience where id = '$user_id' ");
			return $result;
		}
		public function delete_row($del_id){
			$result = $this->con()->query("delete from experience where id='$del_id'");
			return $result;
		}
	}
?>