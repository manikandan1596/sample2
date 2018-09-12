<?php
	include('db/conn.php');
	if(isset($_POST['user'])){
		$user=$_POST['user'];
		$dob=$_POST['dob'];
		$address=$_POST['address'];
		$qual=$_POST['qual'];
		$design=$_POST['design'];

		$conn->query("INSERT INTO user (user, dob, address, qual, design) VALUES ('$user', '$dob', '$address', '$qual', '$design')");
	}

?>