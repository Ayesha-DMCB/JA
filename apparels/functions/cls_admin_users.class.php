<?php
	class cls_admin_users{
		public function con(){
			$dbClass = new dbClass();
			return $dbClass->connection();
		}
		public function user_login($username, $password){
			$userPass = sha1($password);
			$result = $this->con()->query("
				select * from tbl_admin_users where username = '$username' and password = '$userPass'
			");
			
			$count = $result->num_rows;
			if($count == 0){
				return "1|Invalid login";
			}
			$row = $result->fetch_assoc();
			
			session_start();
			$_SESSION['uid'] = "$row[id]";
			$_SESSION['fullname'] = "$row[fullname]";
			$_SESSION['username'] = "$row[username]";
			$_SESSION['user_type'] = "$row[user_type]";
			
			return "0|none";
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
				
			$result = $this->con()->query("insert into tbl_admin_users(fullname, username, password, user_type) values ('$fullname','$username', '$password', '$user_type')");
			
			if($result){
				return "Successfully inserted your Data";
			}
			return "Error Inserting Data";
		}
		public function reg_count(){
			$result = $this->con()->query("select * from tbl_admin_users1 where status = '1' ");
			$count = $result->num_rows;
			return $count;
		}
		public function user_list(){
			$result = $this->con()->query("select * from tbl_admin_users where status = '1' ");
			return $result;
		}
		public function user_details($user_id){
			$result = $this->con()->query("select * from tbl_admin_users where id = '$user_id' ");
			return $result;
		}
		public function delete_row($del_id){
			$result = $this->con()->query("delete from tbl_admin_users where id='$del_id'");
			return $result;
		}
		public function all_user_updt($user_id){
			$result = $this->con()->query("select * from tbl_admin_users1 where id='$user_id'");
			return $result;
		}
		public function edit_user_info(){	
			$user_id = $_POST['user_id']; 
			$fullname = $this->con()->real_escape_string($_POST['fullname']); 
			$username = $this->con()->real_escape_string($_POST['username']);
			$password = $this->con()->real_escape_string($_POST['password']);
			$user_type = $this->con()->real_escape_string($_POST['user_type']);

			$result = $this->con()->query("update tbl_admin_users set
				fullname = '$fullname',
				username = '$username',
				password = '$password',
				user_type = '$user_type'
				where id = '$user_id'
			    ");
				
			if($result){
				return "Successfully updated your data";
			}
			return "Error Inserting Date";	
		}
	}
?>