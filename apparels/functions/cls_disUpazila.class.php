<?php
	class cls_disUpazila{
		public function con(){
			$dbClass = new dbClass();
			return $dbClass->connection();
		}
		public function divisions_list(){
			$result = $this->con()->query("select * from districts");
			return $result;
		}
		public function select_district($id){
			$result = $this->con()->query("select * from upazilas where district_id = '$id' ");
			return $result;
	    }
		public function delete_row($del_id){
			$result = $this->con()->query("delete from experience where id='$del_id'");
			return $result;
		}
	}
?>