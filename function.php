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



		function createAccounts($fullname, $address, $contact){
			$sql = "INSERT INTO carowner(carOwner_fullName, carOwner_address, carOwner_contact)";
			$db = mysqli_query($this->dbConnect, $sql);

			if($db){
				echo "kill Shit";

			}
		}
		function create(){
			$sql = "INSERT INTO carowner(carOwner_fullName, carOwner_address, carOwner_contact)";
			$db = mysqli_query($this->dbConnect, $sql);

			if($db){
				echo "kill Shit";

			}
		}


		function read(){
			$sql = "SELECT * FROM carunit";
			$db = mysqli_query($this->dbConnect, $sql);


		}
		
		function update(){
			$sql = "UPDATE_CODE";

			$db = mysqli_query($this->dbConnect, $sql);
		}

		function delete(){
			$sql = "DELETE_CODE";
		}	
			
	}


 ?>