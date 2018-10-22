<?php
class cls_acc_report{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function slct_rec_pay($from_date, $to_date){
		$from_date_s = "";
		$to_date_s = "";
		
		if($from_date != ""){
		$from_date_s = "&& r.pDate >= '$from_date'"; 
		}
		if($to_date != ""){
		$to_date_s = "&& r.pDate <= '$to_date'"; 
		}
		
		$result = $this->con()->query("select r.*, sum(r.dr) as dr, sum(r.cr) as cr, h.acc_subSub_name as head from account_report as r join acc_subsub_head as h on h.acc_subSub_Code=r.accSubSubCode where r.status = '1' $from_date_s $to_date_s group by r.accSubSubCode");
		return $result;
	}
	public function slct_incm($from_date, $to_date, $head, $incm_head){
		$from_date_s = "";
		$to_date_s = "";
		$incm_head_s = "";
		
		if($from_date != ""){
		$from_date_s = "&& r.pDate >= '$from_date'"; 
		}
		if($to_date != ""){
		$to_date_s = "&& r.pDate <= '$to_date'"; 
		}
		if($incm_head != ""){
		$incm_head_s = "&& r.accSubSubCode = '$incm_head'"; 
		}
		
		$result = $this->con()->query("select r.*, sum(r.cr) as cr, h.acc_subSub_name as head from account_report as r join acc_subsub_head as h on h.acc_subSub_Code=r.accSubSubCode where r.leaderCode = '$head' $from_date_s $to_date_s $incm_head_s group by r.accSubSubCode");
		return $result;
	}
	public function slct_expen($from_date, $to_date, $head, $expn_head){
		$from_date_s = "";
		$to_date_s = "";
		$expn_head_s = "";
		
		if($from_date != ""){
		$from_date_s = "&& r.pDate >= '$from_date'"; 
		}
		if($to_date != ""){
		$to_date_s = "&& r.pDate <= '$to_date'"; 
		}
		if($expn_head != ""){
		$expn_head_s = "&& r.accSubSubCode = '$expn_head'"; 
		}
		
		$result = $this->con()->query("select r.*, sum(r.dr) as dr, h.acc_subSub_name as head from account_report as r join acc_subsub_head as h on h.acc_subSub_Code=r.accSubSubCode where r.leaderCode = '$head' $from_date_s $to_date_s $expn_head_s group by r.accSubSubCode");
		return $result;
	}
	public function slct_gservice($cid){
		$result = $this->con()->query("select * from tbl_guest_service where room_no = '$cid' AND status = '1' order by service_id");
		return $result;	
	}
	public function view_cashEntry($post_date){
		$result = $this->con()->query("select r.*, h.acc_subSub_name as head from account_report as r join acc_subsub_head as h on h.acc_subSub_Code=r.accSubSubCode where r.pDate='$post_date' order by r.id desc ");
		return $result;	
	}
	public function view_cashEntryF($from_date, $to_date, $subHead){
		$from_date_s = "";
		$to_date_s = "";
		$subHead_s = "";
		
		if($from_date != ""){
		$from_date_s = "&& r.pDate >= '$from_date'"; 
		}
		if($to_date != ""){
		$to_date_s = "&& r.pDate <= '$to_date'"; 
		}
		if($subHead != ""){
		$subHead_s = "&& r.accSubSubCode = '$subHead'"; 
		}
		
		$result = $this->con()->query("select r.*, h.acc_subSub_name as head from account_report as r join acc_subsub_head as h on h.acc_subSub_Code=r.accSubSubCode where r.id != '' $from_date_s $to_date_s $subHead_s order by r.id desc ");
		return $result;	
	}
	public function custService($room, $guest_id){
		$roomNO = "";
		$guestID = "";
		
		if($room != ""){
		$roomNO = "&& tbl_guest_service.room_no = '$room'"; 
		}
		if($guest_id != ""){
		$guestID = "&& tbl_guest_service.guest_id = '$guest_id'"; 
		}
		
		$result = $this->con()->query("select * from tbl_guest_service where status = '1' $roomNO $guestID order by service_id");
		return $result;	
	}
	public function delete_row($del_id){
		$result = $this->con()->query("delete from account_report where id='$del_id'");
		return $result;
	}
}
?>