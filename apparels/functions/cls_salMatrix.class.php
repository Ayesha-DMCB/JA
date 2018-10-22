<?php
	class cls_salMatrix{
		public function con(){
			$dbClass = new dbClass();
			return $dbClass->connection();
		}
		
		public function update_salMatrix(){
			$basic = $this->con()->real_escape_string($_POST['basic']);
			$HomeRent = $this->con()->real_escape_string($_POST['HomeRent']);
			$MedAllowance = $this->con()->real_escape_string($_POST['MedAllowance']);
			$FoodAllowance = $this->con()->real_escape_string($_POST['FoodAllowance']);
			$conveyance = $this->con()->real_escape_string($_POST['conveyance']);
			$ProbFund = $this->con()->real_escape_string($_POST['ProbFund']);
			
			$result = $this->con()->query("update salaryMatrix set
				basic = '$basic',
				HomeRent = '$HomeRent',
				MedAllowance = '$MedAllowance',
				FoodAllowance = '$FoodAllowance',
				conveyance = '$conveyance',
				ProbFund = '$ProbFund'
				where id = '1'
			");
			if($result){
				return "Successfully updated your Data";
			}
			return "Error in inserting Data";
		}
		
		public function salMat_list(){
			$result = $this->con()->query("select * from salaryMatrix where id = '1' ");
			return $result;
		}
		
	}
?>