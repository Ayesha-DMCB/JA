<?php
	class cls_datetime{
		
		function datetime(){
			$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
			$datetime = $dt->format('Y-m-d h:m:s');
			
			return $datetime;
		}
		function ctime(){
			$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
			//$datetime = $dt->format('h:m:s');
			$datetime = $dt->format('g:i A');
			
			return $datetime;
		}
		
		function todayDate(){
			$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
			$datetime = $dt->format('m/d/Y');
			
			return $datetime;
		}
		
		function show_date(){
			$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
			$datetime = $dt->format('d M Y');
			
			return $datetime;
		}
		
		function current_date_format(){
			$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
			$datetime = $dt->format('l, F jS Y, g:i A T');
			
			return $datetime;
		}
		function current_date(){
			$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
			$datetime = $dt->format('l, F jS Y');
			
			return $datetime;
		}
		function post_time(){
			$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
			$datetime = $dt->format('d M Y, g:i A');
			
			return $datetime;
		}
		function post_time1(){
			$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
			$datetime = $dt->format('g:i A');
			
			return $post_time1;
		}

	}
?>