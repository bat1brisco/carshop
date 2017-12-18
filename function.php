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
			$sql = "SELECT * FROM carowner WHERE username = '$username' && password = '$password'";
			$db = mysqli_query($this->dbConnect, $sql);
			$user = mysqli_fetch_assoc($db);
			if($username == $user['username'] && $password == $user['password']){
				$ret = 1;
			}else{
				$ret = 0;
			}
			return $ret;
		}
		function createAccounts($fullname, $address, $contact, $email, $username, $password){
			$sql = "INSERT INTO carowner(carOwner_fullName, carOwner_address, carOwner_contact, email, username, password) VALUES('$fullname', '$address', '$contact', '$email', '$username', '$password')";

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
		function edit($fullname, $address, $contact, $email, $username, $password){
			$sql = "UPDATE `carowner` SET `carOwner_fullName` = '$fullname', `carOwner_address` = '$address', `carOwner_contact` = '$contact', `username` = ' $username', `password` = '$password', `email` = '$email' WHERE `carowner`.`carOwner_id` = $id;";
			$db = mysqli_query($this->dbConnect, $sql);

			return 1;
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
			
	}


 ?>