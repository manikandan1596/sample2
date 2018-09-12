<?php
	include('db/conn.php');
	if(isset($_POST['memid'])){
		$memid=$_POST['memid'];

		$conn->query("DELETE FROM user WHERE id='$memid'");
	}
?>