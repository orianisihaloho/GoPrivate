<?php
	session_start();
	include_once('fungsi.php');
	if(isset($_SESSION['is_logged_in'])){
		redirect('index.php');
	}
	$username 	= $_POST ['username'];
	$password	= $_POST ['password'];
	$role		= $_POST ['role'];
	
	$database = new mysqli('127.0.0.1', 'root', '', 'goprivate');
	$query = 'SELECT * FROM users WHERE username=? AND password=?';
	
	$statement = $database->prepare($query);
	$statement->bind_param('is', $username, $password);
	$statement->execute();
	$result_set = $statement->get_result();

	if($result_set -> num_rows){
		$_SESSION ['is_logged_in'] = TRUE;
		$_SESSION['role'] = 'orangtua';
		redirect('index_guru.php');
	}else{
		redirect('index.php');
	}
?>