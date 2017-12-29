<?php 
	class database{
		function __construct(){
			$this->dbConnect = mysqli_connect("localhost", "root", "", "carshop");
			}
		function showcars(){
			$sql = "SELECT * FROM carunit";
			$db = mysqli_query($this->dbConnect, $sql);
			return $db;
		}
		function showowners(){
			$sql = "SELECT * FROM carowner";
			$db = mysqli_query($this->dbConnect, $sql);
			return $db;
		}
		function checkUser($username, $password){
			$sql = "SELECT * FROM carowner WHERE `user` = '$username' OR `pass` = '$password'";
			$db = mysqli_query($this->dbConnect, $sql);
			$user = mysqli_fetch_array($db);
			
			if($user['user'] == $username || $user['pass'] == $password){
				$ret = 1; 
			}else{
				$ret = 0;
			}
			return $ret;
		}
		function createAccounts($fname, $lname, $address, $contact, $email, $username, $password){
			$sql = "INSERT INTO carowner(carowner_fname, carowner_lname, carOwner_address, carOwner_contact, email, username, password) VALUES('$fname', '$lname', '$address', '$contact', '$email', '$username', '$password')";

			$db = mysqli_query($this->dbConnect, $sql);
			if(!$db){
				echo "kill Shit";
			}
		}
		function delete($id){
			$sql = "UPDATE `carowner` SET `flag` = '0' WHERE `carowner`.`carOwner_id` = $id;";
			$delete = mysqli_query($this->dbConnect, $sql);
			return 1;
		}
		function edit($fname, $lname, $address, $contact, $email, $id){
			$sql = "UPDATE `carowner` SET `carowner_fname`='$fname', `carowner_lname`='$lname', `carOwner_address`='$address', `carOwner_contact`='$contact', `pass`='$pass', `email`='$email' WHERE `carowner`.`carOwner_id` = $id;";
			$db = mysqli_query($this->dbConnect, $sql);
			if($db){
				$ret = 1;
			}else{
				$ret = 0;
			}
			return $ret;
		}
		function update(){
			$sql = "UPDATE_CODE";
			$db = mysqli_query($this->dbConnect, $sql);
		}	
		function showOwner($id){
			$sql = "SELECT * FROM carowner WHERE carOwner_id = '$id';";
			$db = mysqli_query($this->dbConnect, $sql);
			$fetch = mysqli_fetch_array($db);
			return $fetch;
		}
		function addCars($carbrand, $carmodel, $carmodelyear, $cartype, $id){
			$sql = "INSERT INTO carunit(carUnitType, car_brand, car_model, car_modelyear, carOwner_id) VALUES('$cartype', '$carmodel', '$carmodelyear', '$carbrand', $id)";
			$db = mysqli_query($this->dbConnect, $sql);
			
			return $db;
		}	
		public function message($id){
			$query = "SELECT * FROM messageTemplate WHERE message_id = $id;"; 
			$que = mysqli_query($this->dbConnect, $query);
			$res = mysqli_fetch_assoc($que);
			return $res['message'];
		}
		public function searchNumber($id){
			$query = "SELECT carOwner_contact FROM carowner WHERE carOwner_id = $id;";
			$q = mysqli_query($this->dbConnect, $query);
			$ret = mysqli_fetch_assoc($q);
			return $ret['carOwner_contact'];
		}
	}


 ?>		
