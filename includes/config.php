<?php
	ob_start();
	session_start();
	$timezone = date_default_timezone_set("Asia/Kuala_Lumpur");

	$con = mysqli_connect("localhost","root","root","suddenly");

	//check connection
	if(mysqli_connect_errno()){
		echo "leiguang fail sql connect";
		echo "Fail to connect: ",mysqli_connect_errno();
	}

?>