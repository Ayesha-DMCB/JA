<?php
class cls_guest{
	public function con(){
		$dbClass = new dbClass();
		return $dbClass->connection();
	}
	public function insert_guest($uID){
		$cust_ID = $this->con()->real_escape_string($_POST['custID']); 
		$voucher_no = $this->con()->real_escape_string($_POST['voucher_no']); 
		$company_name = $this->con()->real_escape_string($_POST['company_name']);
		$other_group = $this->con()->real_escape_string($_POST['other_group']);
		$fullname = $this->con()->real_escape_string($_POST['fullname']); 
		$selct_room = $this->con()->real_escape_string($_POST['selct_room']);
		$room_cat = $this->con()->real_escape_string($_POST['room_cat']);
		$room_type = $this->con()->real_escape_string($_POST['room_type']);
		$adult = $this->con()->real_escape_string($_POST['adult']);
		$child = $this->con()->real_escape_string($_POST['child']);
		$cust_no = $this->con()->real_escape_string($_POST['cust_no']);
		$no_night = $this->con()->real_escape_string($_POST['no_night']);
		$check_in = $this->con()->real_escape_string($_POST['check_in']);
		$in_time = $this->con()->real_escape_string($_POST['in_time']);
		$check_out = $this->con()->real_escape_string($_POST['check_out']);
		$out_time = $this->con()->real_escape_string($_POST['out_time']);
		$gender = $this->con()->real_escape_string($_POST['gender']);
		$mobile = $this->con()->real_escape_string($_POST['mobile']);
		$nid = $this->con()->real_escape_string($_POST['nid']);
		$email = $this->con()->real_escape_string($_POST['email']);
		$country = $this->con()->real_escape_string($_POST['country']);
		$occupation = $this->con()->real_escape_string($_POST['occupation']);
		$purpose_stay = $this->con()->real_escape_string($_POST['purpose_stay']);
		$reference = $this->con()->real_escape_string($_POST['reference']);
		$address = $this->con()->real_escape_string($_POST['address']);
		$price = $this->con()->real_escape_string($_POST['price']);
		$totalP = $this->con()->real_escape_string($_POST['totalP']);
		$advance = $this->con()->real_escape_string($_POST['advance']);
		$status = $this->con()->real_escape_string($_POST['status']);
		$posted_date = $this->con()->real_escape_string($_POST['posted_date']);
		$due = $totalP-$advance;
		$r_status = "";
		$custID = "";
		$vNO = "";
		
		
		if($other_group == "1"){
		$custID = $cust_ID;
	    $vNO = $voucher_no; 
		}
		else{
		$mid = $this->con()->query("select MAX(id) as mid from tbl_guest ");
		$mid_row = $mid->fetch_assoc();
		$max_id  =  $mid_row["mid"] + 1;
		$custID = "CID-".$max_id;
		$vNO = "V-".$max_id;
		}
		
		if($status == 0){
	    $r_status = 1;	
		}
		else if($status == 2){
		$r_status = 2;	
		}
		$result = $this->con()->query("insert into tbl_guest(custID, fullname, company_name, selct_room, room_cat, room_type, adult, child, cust_no, no_night, check_in, in_time, check_out, out_time, gender, mobile, email, country, occupation, purpose_stay, address, price, advance, due, totalP, posted_date, nid, reference, voucher_no, uid, status) values ('$custID', '$fullname', '$company_name', '$selct_room', '$room_cat', '$room_type', '$adult', '$child', '$cust_no', '$no_night', '$check_in', '$in_time', '$check_out', '$out_time', '$gender', '$mobile', '$email', '$country', '$occupation', '$purpose_stay', '$address', '$price', '$advance', '$due', '$totalP', '$posted_date', '$nid', '$reference', '$vNO', '$uID', '$r_status')");
		
		$result1 = $this->con()->query("update tbl_add_room set
			from_date = '$check_in',
			to_date = '$check_out',
			in_time = '$in_time',
			out_time = '$out_time',
			status = '$status'
			where room_no = '$selct_room'
		");
		if($result){
			return "Successfully inserted your Data";
		}
		return "Error Inserting Data";
	}
	public function edit_guest(){
		$uid = $this->con()->real_escape_string($_POST['uid']); 
		$custID = $this->con()->real_escape_string($_POST['custID']); 
		$fullname = $this->con()->real_escape_string($_POST['fullname']); 
		$company_name = $this->con()->real_escape_string($_POST['company_name']); 
		$selct_room = $this->con()->real_escape_string($_POST['selct_room']);
		$room_cat = $this->con()->real_escape_string($_POST['room_cat']);
		$room_type = $this->con()->real_escape_string($_POST['room_type']);
		$adult = $this->con()->real_escape_string($_POST['adult']);
		$child = $this->con()->real_escape_string($_POST['child']);
		$cust_no = $this->con()->real_escape_string($_POST['cust_no']);
		$no_night = $this->con()->real_escape_string($_POST['no_night']);
		$check_in = $this->con()->real_escape_string($_POST['check_in']);
		$in_time = $this->con()->real_escape_string($_POST['in_time']);
		$check_out = $this->con()->real_escape_string($_POST['check_out']);
		$out_time = $this->con()->real_escape_string($_POST['out_time']);
		$gender = $this->con()->real_escape_string($_POST['gender']);
		$mobile = $this->con()->real_escape_string($_POST['mobile']);
		$nid = $this->con()->real_escape_string($_POST['nid']);
		$email = $this->con()->real_escape_string($_POST['email']);
		$country = $this->con()->real_escape_string($_POST['country']);
		$occupation = $this->con()->real_escape_string($_POST['occupation']);
		$purpose_stay = $this->con()->real_escape_string($_POST['purpose_stay']);
		$reference = $this->con()->real_escape_string($_POST['reference']);
		$address = $this->con()->real_escape_string($_POST['address']);
		$price = $this->con()->real_escape_string($_POST['price']);
		$totalP = $this->con()->real_escape_string($_POST['totalP']);
		$advance = $this->con()->real_escape_string($_POST['advance']);
		$status = $this->con()->real_escape_string($_POST['status']);
		$posted_date = $this->con()->real_escape_string($_POST['posted_date']);
		$voucher_no = $this->con()->real_escape_string($_POST['voucher_no']);
		$r_status = "";
		
		if($status == 0){
	    $r_status = 1;	
		}
		else if($status == 2){
		$r_status = 2;	
		}
		
		$result = $this->con()->query("update tbl_guest set
			custID = '$custID',
			fullname = '$fullname',
			company_name = '$company_name',
			selct_room = '$selct_room',
			room_cat = '$room_cat',
			room_type = '$room_type',
			adult = '$adult',
			child = '$child',
			cust_no = '$cust_no',
			no_night = '$no_night',
			check_in = '$check_in',
			in_time = '$in_time',
			check_out = '$check_out',
			out_time = '$out_time',
			gender = '$gender',
			mobile = '$mobile',
			email = '$email',
			country = '$country',
			occupation = '$occupation',
			purpose_stay = '$purpose_stay',
			address = '$address',
			price = '$price',
			advance = '$advance',
			totalP = '$totalP',
			posted_date = '$posted_date',
			nid = '$nid',
			reference = '$reference',
			voucher_no = '$voucher_no',
			status = '$r_status'
			where id = '$uid'
		");
			
		if($company_name != ""){
			$sql = $this->con()->query("update tbl_guest set
			adult = '$adult',
			child = '$child',
			cust_no = '$cust_no',
			no_night = '$no_night',
			gender = '$gender',
			country = '$country',
			occupation = '$occupation',
			purpose_stay = '$purpose_stay',
			address = '$address',
			price = '$price',
			advance = '$advance',
			totalP = '$totalP',
			nid = '$nid',
			reference = '$reference'
			where company_name = '$company_name'
			");
		}
		$result1 = $this->con()->query("update tbl_add_room set
			from_date = '$check_in',
			to_date = '$check_out',
			status = '$status'
			where room_no = '$selct_room'
		");
		if($result){
			return "Successfully Updated your Data";
		}
		return "Error in Data";
	}
	public function update_bill($uID,$post_date,$year){ 
	    $vno = $this->con()->real_escape_string($_POST['vno']);
	    $cid = $this->con()->real_escape_string($_POST['cid']);
	    $ex_service = $this->con()->real_escape_string($_POST['ex_service']);
	    $ser_charge = $this->con()->real_escape_string($_POST['ser_charge']);
	    $pay_mode = $this->con()->real_escape_string($_POST['pay_mode']);
	    $tax = $this->con()->real_escape_string($_POST['tax']);
	    $cash = $this->con()->real_escape_string($_POST['tAmount']);
	    $discount = $this->con()->real_escape_string($_POST['discount']);
	    $payMent = $this->con()->real_escape_string($_POST['payMent']);
	    $due = $this->con()->real_escape_string($_POST['due']);
	    $notes = $this->con()->real_escape_string($_POST['notes']);
	    $serT = $this->con()->real_escape_string($_POST['serT']);
	    $vTax = $this->con()->real_escape_string($_POST['vTax']);
	    $advance = $this->con()->real_escape_string($_POST['advance']);
	    $status = $this->con()->real_escape_string($_POST['status']);
		
		$result = $this->con()->query("update tbl_guest set
			discount = '$discount',
			tax = '$tax',
			payMent = '$payMent',
			due = '$due',
			ex_service = '$ex_service',
			ser_charge = '$ser_charge',
			pay_mode = '$pay_mode',
			cash = '$cash',
			notes = '$notes'
			where custID = '$cid'
		");
		if($payMent != "0"){
			if($status == "1"){
			$sql = $this->con()->query("select * from tbl_guest_service where vno='$vno' ");
			while($view_row= $sql->fetch_assoc()){
			 $acc_subHead = '101000';
			 $service_id = $view_row['service_id'];
			 $comment = $view_row['comment'];
			 $total = $view_row['total'];
			 if($due > 0){
				if($service_id == '101001'){
				   $total = $total-$due;
				} 
			 }
			 
			 $result1 = $this->con()->query("insert into account_report(pYear, pDate, voucherNo, leaderCode, accSubSubCode, cr, notes, user_id, tranType, tranStatus) values('$year', '$post_date', '$vno', '$acc_subHead', '$service_id', '$total', '$comment', '$uID', 'rec', 'cash')");
			}
			$result2 = $this->con()->query("insert into account_report(pYear, pDate, voucherNo, leaderCode, accSubSubCode, cr, notes, user_id, tranType, tranStatus) values('$year', '$post_date', '$vno', '101000', '101013', '$vTax', '', '$uID', 'rec', 'cash')");
			$result3 = $this->con()->query("insert into account_report(pYear, pDate, voucherNo, leaderCode, accSubSubCode, cr, notes, user_id, tranType, tranStatus) values('$year', '$post_date', '$vno', '101000', '101014', '$serT', '', '$uID', 'rec', 'cash')");
			$result3 = $this->con()->query("insert into account_report(pYear, pDate, voucherNo, leaderCode, accSubSubCode, cr, notes, user_id, tranType, tranStatus) values('$year', '$post_date', '$vno', '101000', '101015', '$advance', '', '$uID', 'rec', 'cash')");
			}
		}
		if($result){
			return "Successfully Updated your Data";
		}
		return "Error in Data";
	}
	public function check_out_guest($id, $time, $post_date, $uid){
		$result = $this->con()->query("update tbl_guest set check_out='$post_date', out_time='$time', uid='$uid', status = '0' where id = '$id'");
		
		if($result){
			$check = $this->con()->query("select * from tbl_guest where id = '$id'");
			$row = $check->fetch_assoc();
			$rid = $row['selct_room'];
			
			$result1 = $this->con()->query("update tbl_add_room set
				from_date = '',
				to_date = '',
				in_time = '',
				out_time = '',
				status = '1'
				where room_no = '$rid'
			");
		return "Checkout Guest";
		}
		return "Error in Data";
	}
	public function check_out_guestC($id, $time, $post_date, $uid){
		$result = $this->con()->query("update tbl_guest set check_out='$post_date', out_time='$time', uid='$uid', status = '0' where company_name = '$id'");
		
		if($result){
			$check = $this->con()->query("select * from tbl_guest where company_name = '$id'");
			while($row = $check->fetch_assoc()){
			$rid = $row['selct_room'];
			
			$result1 = $this->con()->query("update tbl_add_room set
				from_date = '',
				to_date = '',
				in_time = '',
				out_time = '',
				status = '1'
				where room_no = '$rid'
			");
			}
		return "Checkout Guest";
		}
		return "Error in Data";
	}
	public function total_page(){
	   $result = $this->con()->query("select count(*) As Total from tbl_guest");
	   return $result;
	}
	public function guest_all(){
		$result = $this->con()->query("select * from tbl_guest order by room_no");
		return $result;
	}
	public function guest_list(){
		$result = $this->con()->query("select * from tbl_guest where status = '1' order by id desc ");
		return $result;
	}
	public function guestTotal(){
		$result = $this->con()->query("select sum(cust_no) as cust from tbl_guest where status = '1' ");
		$row = $result->fetch_assoc();
		$total = $row['cust'];
		return $total;
	}
	public function guest_list_check(){
		$result = $this->con()->query("select * from tbl_guest where status = '1' order by company_name ");
		return $result;
	}
	public function guest_payF($from_date, $to_date, $room_no, $com_name, $user){
		$from_date_s = "";
		$to_date_s = "";
		$room_s = "";
		$com_name_s = "";
		$user_s = "";
		
		if($from_date != ""){
		$from_date_s = "&& g.check_out >= '$from_date'"; 
		}
		if($to_date != ""){
		$to_date_s = "&& g.check_out <= '$to_date'"; 
		}
		if($room_no != ""){
		$room_s = "&& g.selct_room = '$room_no'"; 
		}
		if($com_name != ""){
		$com_name_s = "&& g.company_name = '$com_name'"; 
		}
		if($user != ""){
		$user_s = "&& g.uid = '$user'"; 
		}
		
		$result = $this->con()->query("select g.*, a.username as uname from tbl_guest as g join tbl_admin_users as a on a.id=g.uid where g.status = '0' $from_date_s $to_date_s $room_s $com_name_s $user_s GROUP BY g.voucher_no ");
		return $result;
	}
	public function guest_payF_gr($from_date, $to_date, $com_name, $user){
		$from_date_s = "";
		$to_date_s = "";
		$com_name_s = "";
		$user_s = "";
		
		if($from_date != ""){
		$from_date_s = "&& g.check_out >= '$from_date'"; 
		}
		if($to_date != ""){
		$to_date_s = "&& g.check_out <= '$to_date'"; 
		}
		if($com_name != ""){
		$com_name_s = "&& g.company_name = '$com_name'"; 
		}
		if($user != ""){
		$user_s = "&& g.uid = '$user'"; 
		}
		
		$result = $this->con()->query("select g.*, a.username as uname from tbl_guest as g join tbl_admin_users as a on a.id=g.uid where g.status = '0' $com_name_s $user_s order by g.id desc ");
		return $result;
	}
	public function guest_pay($check_out){
		$result = $this->con()->query("select * from tbl_guest where status = '0' AND check_out = '$check_out' order by id desc ");
		return $result;
	}
	public function guest_dueReport($from_date, $to_date){
		$from_date_s = "";
		$to_date_s = "";
		
		if($from_date != ""){
		$from_date_s = "&& tbl_guest.check_out >= '$from_date'"; 
		}
		if($to_date != ""){
		$to_date_s = "&& tbl_guest.check_out <= '$to_date'"; 
		}
		
		$result = $this->con()->query("select * from tbl_guest where status='0' AND due='0' $from_date_s $to_date_s group by voucher_no");
		return $result;
	}
	public function guest_service($room_no){
		$room_no_s = "";
		
		if($room_no != ""){
		$room_no_s = "&& tbl_guest.selct_room = '$room_no'"; 
		}
		
		$result = $this->con()->query("select * from tbl_guest where status = '1' $room_no_s  ");
		return $result;
	}
	public function guest_serviceCheck($room_no, $com){
		$room_no_s = "";
		$com_s = "";
		
		if($room_no != ""){
		$room_no_s = "&& tbl_guest.selct_room = '$room_no'"; 
		}
		if($com != ""){
		$com_s = "&& tbl_guest.company_name = '$com'"; 
		}
		
		$result = $this->con()->query("select * from tbl_guest where status = '1' $room_no_s $com_s group by voucher_no");
		return $result;
	}
	public function guest_serviceC($com_name){
		$com_name_s = "";
		
		if($com_name != ""){
		$com_name_s = "&& tbl_guest.company_name = '$com_name'"; 
		}
		
		$result = $this->con()->query("select * from tbl_guest where status = '1' $com_name_s group by voucher_no ");
		return $result;
	}
	public function guest_group($group){
		$result = $this->con()->query("select * from tbl_guest where status = '1' AND company_name = '$group' ");
		return $result;
	}
	public function guest_groupC($group){
		$result = $this->con()->query("select * from tbl_guest where status = '0' AND company_name = '$group' ");
		return $result;
	}
	public function guest_list_filter($start, $perpage, $cin){
		$start_q = "";
		$guestID = "";
		
		if($room != ""){
		$roomNO = "&& tbl_guest_service.room_no = '$room'"; 
		}
		if($guest_id != ""){
		$guestID = "&& tbl_guest_service.guest_id = '$guest_id'"; 
		}
		
		$result = $this->con()->query("select * from tbl_guest where status = '1' order by id desc Limit $start, $perpage");
		return $result;
	}
	public function guest_list_q($start, $perpage){
		$result = $this->con()->query("select * from tbl_guest where status = '1' order by id desc Limit $start, $perpage");
		return $result;
	}
	public function guest_room(){
		$result = $this->con()->query("select custID, fullname, selct_room, voucher_no from tbl_guest where status = '1' group by selct_room");
		return $result;
	}
	public function guest_male(){
		$result = $this->con()->query("select * from tbl_guest where status = '1' and gender = 'male' ");
		return $result;
	}
	public function guest_female(){
		$result = $this->con()->query("select * from tbl_guest where status = '1' and gender = 'female' ");
		return $result;
	}
	public function guest_child(){
		$result = $this->con()->query("select SUM(child) as child from tbl_guest where status = '1'");
		$row = $result->fetch_assoc(); 
		return $row['child'];
	}
	public function guest_c($room){
		$result = $this->con()->query("select * from tbl_guest where selct_room = '$room' AND status = '1'");
		return $result;
	}
	public function guest_c1($room){
		$result = $this->con()->query("select * from tbl_guest where selct_room = '$room' AND status = '0'");
		return $result;
	}
	public function guest_b($room){
		$result = $this->con()->query("select * from tbl_guest where selct_room = '$room' AND status = '2'");
		return $result;
	}
	public function group_guest($com){
		$result = $this->con()->query("select *, sum(cust_no) as cust_no  from tbl_guest where company_name = '$com' AND status = '1'");
		return $result;
	}
	public function group_guest1($com){
		$result = $this->con()->query("select *, sum(cust_no) as cust_no  from tbl_guest where company_name = '$com' AND status = '0'");
		return $result;
	}
	public function guestS($cid){
		$result = $this->con()->query("select * from tbl_guest where custID = '$cid' AND status = '1'");
		return $result;
	}
	public function guest_today($post_date){
		$result = $this->con()->query("select * from tbl_guest where check_in = '$post_date' AND status = '1'");
		return $result;
	}
	public function guest_TCheckin($post_date){
		$result = $this->con()->query("select * from tbl_guest where posted_date = '$post_date' AND status = '1'");
		return $result;
	}
	public function guest_TCheckout($post_date){
		$result = $this->con()->query("select * from tbl_guest where check_out = '$post_date' AND status = '1'");
		return $result;
	}
	public function guest_TBooking($post_date){
		$result = $this->con()->query("select * from tbl_guest where posted_date = '$post_date' AND status = '2'");
		return $result;
	}
	public function guest_amountR($cid){
		$result = $this->con()->query("select SUM(totalP) as totalP from tbl_guest where custID = '$cid' AND status = '1'");
		$row = $result->fetch_assoc();
		$custID = $row['totalP'];
		return $custID;
	}
	public function guest_amountP($cid){
		$result = $this->con()->query("select SUM(totalP) as totalP from tbl_guest where custID = '$cid' AND status = '0'");
		$row = $result->fetch_assoc();
		$custID = $row['totalP'];
		return $custID;
	}
	public function guest_todayF($from_date, $to_date, $room_no, $com_name, $rstatus){
		$from_date_s = "";
		$to_date_s = "";
		$room_no_s = "";
		$com_name_s = "";
		$rstatus_s = "";
		
		if($from_date != ""){
		$from_date_s = "&& tbl_guest.check_in >= '$from_date'"; 
		}
		if($to_date != ""){
		$to_date_s = "&& tbl_guest.check_in <= '$to_date'";
		}
		if($room_no != ""){
		$room_no_s = "&& tbl_guest.selct_room = '$room_no'";
		}
		if($com_name != ""){
		$com_name_s = "&& tbl_guest.company_name = '$com_name'";
		}
		if($rstatus != ""){
		$rstatus_s = "&& tbl_guest.status = '$rstatus'";
		}else{
		$rstatus_s = "&& (tbl_guest.status = '1' || tbl_guest.status = '2')";	
		}
		
		$result = $this->con()->query("select * from tbl_guest where id!='' $from_date_s $to_date_s $room_no_s $com_name_s $rstatus_s");
		return $result;
	}
	public function guest_todayG($post_date){
		$result = $this->con()->query("select * from tbl_guest where posted_date = '$post_date' AND (status = '1' OR status = '2') ");
		return $result;
	}
	public function guest_todayF1($from_date, $to_date, $room_no, $com_name){
		$from_date_s = "";
		$to_date_s = "";
		$room_no_s = "";
		$com_name_s = "";
		
		if($from_date != ""){
		$from_date_s = "&& tbl_guest.check_in >= '$from_date'"; 
		}
		if($to_date != ""){
		$to_date_s = "&& tbl_guest.check_in <= '$to_date'";
		}
		if($room_no != ""){
		$room_no_s = "&& tbl_guest.selct_room = '$room_no'";
		}
		if($com_name != ""){
		$com_name_s = "&& tbl_guest.company_name = '$com_name'";
		}
		
		$result = $this->con()->query("select * from tbl_guest where id != '' AND (status = '1' || status = '2') $from_date_s $to_date_s $room_no_s $com_name_s group by voucher_no ");
		//$result = $this->con()->query("select * from tbl_guest where company_name != '' AND (status = '1' || status = '2') $from_date_s $to_date_s $room_no_s $com_name_s group by company_name UNION ALL select * from tbl_guest where company_name = '' AND (status = '1' || status = '2') $from_date_s $to_date_s $room_no_s $com_name_s  ");
		return $result;
	}
	public function guest_todayG1($post_date){
		$result = $this->con()->query("select * from tbl_guest where posted_date = '$post_date' AND (status = '1' OR status = '2') group by voucher_no ");
		return $result;
	}
	public function tcheckout($post_date){
		$result = $this->con()->query("select * from tbl_guest where status = '0' && check_out = '$post_date' ");
		return $result;
	}
	public function guest_list_ar($from_date, $to_date){
		$from_date_s = "";
		$to_date_s = "";
		
		if($from_date != ""){
		$from_date_s = "&& tbl_guest.check_out >= '$from_date'"; 
		}
		if($to_date != ""){
		$to_date_s = "&& tbl_guest.check_out <= '$to_date'"; 
		}
		$result = $this->con()->query("select * from tbl_guest where status = '0' $from_date_s $to_date_s order by company_name");
		return $result;
	}
	public function guest_list_arT($post_date){

		$result = $this->con()->query("select * from tbl_guest where status = '0' AND check_out='$post_date' ");
		return $result;
	}
	public function room_listF($floor){
		$result = $this->con()->query("select * from tbl_add_room where floor_no = '$floor' ");
		return $result;
	}
	public function delete_user($del_id){
		$result = $this->con()->query("delete from tbl_guest where id='$del_id'");
		return $result;
	}
	public function update_ginfo($user_id){
		$result = $this->con()->query("select * from tbl_guest where id = '$user_id'");
		return $result;
	}
	public function slct_group($com_name){
		$result = $this->con()->query("select * from tbl_guest where company_name = '$com_name' AND status = '1' ");
		return $result;
	}
	public function slct_company(){
		$result = $this->con()->query("select * from tbl_guest where status = '1'");
		return $result;
	}
	public function slct_company1(){
		$result = $this->con()->query("select distinct(company_name) from tbl_guest where status = '1' AND company_name != '' ");
		return $result;
	}
	public function slct_companyP(){
		$result = $this->con()->query("select distinct(company_name) from tbl_guest where company_name != '' ");
		return $result;
	}
}
?>