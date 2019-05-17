<?php
	session_start();
	include_once('fungsi.php');
	open_page('signup');

	// retrieve posted form data
		$fullname	= $_POST['fullname'];
		$email		= $_POST['email'];
		$role		= $_POST['role'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
	$database = new mysqli('127.0.0.1', 'root', '', 'goprivate');
	$link = mysqli_connect('localhost', 'root', '', 'goprivate');
	
	//cek koneksi
	if (!$link) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}

	$query = "INSERT INTO users(fullname, email, role, username, password) VALUES('$fullname', '$email', '$role', '$username', '$password')";
	if ($database->query($query) === TRUE) {
		redirect('login.php');
	} else {
	    echo "Error: " . $query . "<br>" . $database->error;
	}
?>