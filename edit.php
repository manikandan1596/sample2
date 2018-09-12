<?php
	include('db/conn.php');
	if(isset($_POST['euser'])){
		$user=$_POST['euser'];
		$dob=$_POST['edob'];
		$address=$_POST['eaddress'];
		$qual=$_POST['equal'];
		$design=$_POST['edesign'];
		$memid=$_POST['memid'];

		$conn->query("UPDATE user SET user='$user', dob='$dob', address='$address', qual='$qual', design='$design' WHERE id='$memid'");
	}
?>