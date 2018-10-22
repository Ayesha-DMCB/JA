<?php
	class dbClass{
		public function connection(){
			//$db = new mysqli("localhost", "root", "", "garmentsdb");
			$db = new mysqli("localhost", "purbaapp", "vNNTb6GG2TT6HfJ6", "purbaapp_garmentsdb");
			return $db;
		}
	}
?>