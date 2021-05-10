<?php
	ob_start();
	session_start();
	//$timezone = date_default_timezone_set("Asia/Kuala_Lumpur");


	//$con = mysqli_connect("localhost","root","root","suddenly");
	$con = mysqli_connect("remotemysql.com","n4NDrbQHNz ","7UWqSLB21t","n4NDrbQHNz ");
	//check connection
	if(mysqli_connect_errno()){
		echo "leiguang fail sql connect haishhhh";
		echo "Fail to connect: ",mysqli_connect_errno();
	}

?>
