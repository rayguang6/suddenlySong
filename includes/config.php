<?php
	ob_start();
	session_start();
	$timezone = date_default_timezone_set("Asia/Kuala_Lumpur");

	/*
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
	*/

	//$con = mysqli_connect("localhost","root","root","suddenly");
	//$con = mysqli_connect("remotemysql.com","n4NDrbQHNz ","7UWqSLB21t","n4NDrbQHNz ");

	/*
	//check connection
	if(mysqli_connect_errno()){
		echo "leiguang fail sql connect haishhhh";
		echo "Fail to connect: ",mysqli_connect_errno();
	}
	*/

	//another one
	$hostname='remotemysql.com'; 
	$username='n4NDrbQHNz'; 
	$password='7UWqSLB21t'; 
	$dbname='n4NDrbQHNz'; 

$con = new mysqli_connect($hostname,$username,$password,$dbname); 

if ($con-> connect_errno) { 
trigger_error('Database connection failed: ' . $con->connect_error); 
}

?>
