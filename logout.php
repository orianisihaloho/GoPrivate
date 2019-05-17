<?php
	session_start();
	include_once('fungsi.php');

	//only if the session exists
	if(isset($_SESSION['is_logged_in'])){
		unset($_SESSION['is_logged_in']);
	}
	redirect('index.php');
?> 