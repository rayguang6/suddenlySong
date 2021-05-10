<?php
	ob_start();
	session_start();
	$timezone = date_default_timezone_set("Asia/Kuala_Lumpur");

	//try remote
	$host = 'remotemysql.com';
	$db = 'n4NDrbQHNz';
	$user = 'n4NDrbQHNz';
	$pass = '7UWqSLB21t';
	$charset = 'utf8mb4';

	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

	try{
		$con = new PDO($dsn, $user, $pass);
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
		echo "Fail to connect: ";
	}


	//$con = mysqli_connect("localhost","root","root","suddenly");
	//$con = mysqli_connect("remotemysql.com","n4NDrbQHNz ","7UWqSLB21t","n4NDrbQHNz ");

	//check connection
	if(mysqli_connect_errno()){
		echo "leiguang fail sql connect haishhhh";
		echo "Fail to connect: ",mysqli_connect_errno();
	}

?>
