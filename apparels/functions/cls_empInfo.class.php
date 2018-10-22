<?php
	class cls_empInfo{
		public function con(){
			$dbClass = new dbClass();
			return $dbClass->connection();
		}
		public function new_employee($uID){
			$JoinDate = $this->con()->real_escape_string($_POST['JoinDate']); 
			$FactoryCode  = $this->con()->real_escape_string($_POST['FactoryCode']);
			$StaffIDNO = $this->con()->real_escape_string($_POST['StaffIDNO']);
			$StaffName = $this->con()->real_escape_string($_POST['StaffName']);
			$Sex = $this->con()->real_escape_string($_POST['Sex']);
			$FName = $this->con()->real_escape_string($_POST['FName']);
			$MName = $this->con()->real_escape_string($_POST['MName']);
			$MaritalStatus = $this->con()->real_escape_string($_POST['MaritalStatus']);
			$SpouseName = $this->con()->real_escape_string($_POST['SpouseName']);
			$Weight = $this->con()->real_escape_string($_POST['Weight']);
			$Height = $this->con()->real_escape_string($_POST['Height']);
			$BloodGroup = $this->con()->real_escape_string($_POST['BloodGroup']);
			$PreAddress = $this->con()->real_escape_string($_POST['PreAddress']);
			$PerAddress = $this->con()->real_escape_string($_POST['PerAddress']);
			$PS = $this->con()->real_escape_string($_POST['PS']);
			$District = $this->con()->real_escape_string($_POST['District']);
			$PostCode = $this->con()->real_escape_string($_POST['PostCode']);
			$Country = $this->con()->real_escape_string($_POST['Country']);
			$NID = $this->con()->real_escape_string($_POST['NID']);
			$Tel = $this->con()->real_escape_string($_POST['Tel']);
			$EmergContact = $this->con()->real_escape_string($_POST['EmergContact']);
			$eMail = $this->con()->real_escape_string($_POST['eMail']);
			$Religion = $this->con()->real_escape_string($_POST['Religion']);
			$Reference  = $this->con()->real_escape_string($_POST['Reference']);
			$DateOfBirth = $this->con()->real_escape_string($_POST['DateOfBirth']);
			$Designation = $this->con()->real_escape_string($_POST['Designation']);
			$EmpStatus = $this->con()->real_escape_string($_POST['EmpStatus']);
			$ResignDate = $this->con()->real_escape_string($_POST['ResignDate']);
			$JobStatus = $this->con()->real_escape_string($_POST['JobStatus']);
			$LenOfService = $this->con()->real_escape_string($_POST['LenOfService']);
			$HoldingPosition = $this->con()->real_escape_string($_POST['HoldingPosition']);
			
			$imgId = $StaffIDNO.".jpg";
			if($imagename = $_FILES['fileImg']['name']){
			   $sourcePath = $_FILES['fileImg']['tmp_name'];   
			   $targetPath = "../images/empInfo/".$imgId; 
			   
			move_uploaded_file($sourcePath,$targetPath); 		   
			}
			
			$result = $this->con()->query("insert into staffinfo(JoinDate, FactoryCode, StaffIDNO, StaffName, Sex, FName, MName, MaritalStatus, SpouseName, Weight, Height, BloodGroup, PreAddress, PerAddress, PS, District, PostCode, Country, NID, Tel, EmergContact, eMail, Religion, Reference, DateOfBirth, Designation, EmpStatus, ResignDate, JobStatus, LenOfService, HoldingPosition, fileImg, uID) values ('$JoinDate', '$FactoryCode', '$StaffIDNO', '$StaffName', '$Sex', '$FName', '$MName', '$MaritalStatus', '$SpouseName', '$Weight', '$Height', '$BloodGroup', '$PreAddress', '$PerAddress ', '$PS', '$District', '$PostCode', '$Country', '$NID', '$Tel', '$EmergContact', '$eMail', '$Religion', '$Reference', '$DateOfBirth', '$Designation', '$EmpStatus', '$ResignDate', '$JobStatus', '$LenOfService', '$HoldingPosition', '$imgId', '$uID')");
			
			if($result){
				return "Successfully inserted your Data";
			}
			return "Error Inserting Data";
		}
		
		public function emp_qualification(){
			$EntryDate = $this->con()->real_escape_string($_POST['EntryDate']); 
			$StaffIDNO  = $this->con()->real_escape_string($_POST['StaffIDNO']);
			$Qualification = $this->con()->real_escape_string($_POST['Qualification']);
			$ExamTitle = $this->con()->real_escape_string($_POST['ExamTitle']);
			$MajorGroup = $this->con()->real_escape_string($_POST['MajorGroup']);
			$InstName = $this->con()->real_escape_string($_POST['InstName']);
			$Result = $this->con()->real_escape_string($_POST['Result']);
			$YearOfPass = $this->con()->real_escape_string($_POST['YearOfPass']);
			$Duration = $this->con()->real_escape_string($_POST['Duration']);
			$Achivement = $this->con()->real_escape_string($_POST['Achivement']);
			$Comments = $this->con()->real_escape_string($_POST['Comments']);
					
			$result = $this->con()->query("insert into qualification(EntryDate, StaffIDNO, Qualification, ExamTitle, MajorGroup, InstName, Result, YearOfPass, Duration, Achivement, Comments) values ('$EntryDate', '$StaffIDNO', '$Qualification', '$ExamTitle', '$MajorGroup', '$InstName', '$Result', '$YearOfPass', '$Duration', '$Achivement', '$Comments')");
			
			if($result){
				return "Successfully inserted your Data";
			}
			return "Error Inserting Data";
		}
		
		public function emp_experience(){
			$EntryDate = $this->con()->real_escape_string($_POST['EntryDate']); 
			$StaffIDNO  = $this->con()->real_escape_string($_POST['StaffIDNO']);
			$CompanyName = $this->con()->real_escape_string($_POST['CompanyName']);
			$CompanyBusiness = $this->con()->real_escape_string($_POST['CompanyBusiness']);
			$CompanyLocation = $this->con()->real_escape_string($_POST['CompanyLocation']);
			$Department = $this->con()->real_escape_string($_POST['Department']);
			$PositionHeld = $this->con()->real_escape_string($_POST['PositionHeld']);
			$AreaofExp = $this->con()->real_escape_string($_POST['AreaofExp']);
			$Res = $this->con()->real_escape_string($_POST['Res']);
			$DateFrom = $this->con()->real_escape_string($_POST['DateFrom']);
			$DateTo = $this->con()->real_escape_string($_POST['DateTo']);
			$Comments = $this->con()->real_escape_string($_POST['Comments']);
					
			$result = $this->con()->query("insert into experience(EntryDate, StaffIDNO, CompanyName, CompanyBusiness, CompanyLocation, Department, PositionHeld, AreaofExp, Respons, DateFrom, DateTo, Comments) values ('$EntryDate', '$StaffIDNO', '$CompanyName', '$CompanyBusiness', '$CompanyLocation', '$Department', '$PositionHeld', '$AreaofExp', '$Res', '$DateFrom', '$DateTo', '$Comments')");
			
			if($result){
				return "Successfully inserted your Data";
			}
			return "Error Inserting Data";
		}

		public function staff_id(){
			$mid = $this->con()->query("select MAX(id) as mid from staffinfo");
			$mid_row = $mid->fetch_assoc();
			$staff_id  =  $mid_row["mid"] + 1;
			return $staff_id;
		}
		public function staff_list(){
			$result = $this->con()->query("select * from staffinfo where status = '1' order by id desc");
			return $result;
		}
		public function staff_details($user_id){
			$result = $this->con()->query("select a.*, b.name as dis from staffinfo as a join districts as b on b.id = a.District where a.StaffIDNO = '$user_id' ");
			return $result;
		}
		public function quality_list(){
			$result = $this->con()->query("select * from qualification where status = '1' order by id desc");
			return $result;
		}
		public function qua_details($uid){
			$result = $this->con()->query("select * from qualification where status = '1' AND StaffIDNO = '$uid' order by id desc");
			return $result;
		}
		public function experi_list(){
			$result = $this->con()->query("select * from experience where status = '1' order by id desc");
			return $result;
		}
		public function exp_details($uid){
			$result = $this->con()->query("select * from experience where status = '1' AND StaffIDNO = '$uid' order by id desc");
			return $result;
		}
		public function delete_row($del_id){
			$result = $this->con()->query("delete from staffinfo where id='$del_id'");
			return $result;
		}
	}
?>