<?php
	session_start();
	include_once('fungsi.php');
	open_page('pesan guru');

	// retrieve posted form data
		$namaguru	= $_POST['namaguru'];
		$telepon	= $_POST['telepon'];
		$level		= $_POST['level'];
		$pelajaran 	= $_POST['pelajaran'];
		$hari1	 	= $_POST['hari1'];
		$pukul1		= $_POST['pukul1'];
		$hari2	 	= $_POST['hari2'];
		$pukul2		= $_POST['pukul2'];
		$hari3	 	= $_POST['hari3'];
		$pukul3		= $_POST['pukul3'];
		
	$database = new mysqli('127.0.0.1', 'root', '', 'goprivate');
	$link = mysqli_connect('localhost', 'root', '', 'goprivate');
	
	//cek koneksi
	if (!$link) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}

	$query = "INSERT INTO pesan_guru(`namaguru`, `telepon`, `level`, `pelajaran`, `hari1`, `pukul1`, `hari2`, `pukul2`, `hari3`, `pukul3`) VALUES ('$namaguru', '$telepon', '$level','$pelajaran', '$hari1', '$pukul1', '$hari2', '$pukul2', '$hari3', '$pukul3')";
	if ($database->query($query) === TRUE) {
		redirect('index.php');
	} else {
	    echo "Error: " . $query . "<br>" . $database->error;
	}
?>