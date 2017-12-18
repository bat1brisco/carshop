<?php 
	
	require_once 'function.php';
	$database = new database();

	$id = $_GET['id'];

	$database->delete($id);

	header("location:admin-owners.php");

 ?>