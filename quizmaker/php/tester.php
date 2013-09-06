<?php
include 'functions.php';
	// SET UP THE SQL CONNECTION
	$db_hostname = "localhost";
	$db_database = "quizzler"; 
	$db_username = "s17";
	$db_password = "groupe17";

	// CONNECT TO THE DATABASE
	//try{
		//$DBH = new PDO('mysql:host=$db_hostname; dbname=$db_database', 
			//'db_username', 'db_password');
		//$DBH::ATTR_EMULATE_PREPARES is false
		$DBH = mysql_connect($db_hostname, $db_username, $db_password) OR die("AHAHA you suck");
		mysql_select_db($db_database);
	//}
	//catch(PDOException $e){
		//echo $e->getMessage();
	//}
	
	/*$query = "SELECT * FROM users WHERE user_id = 1;";
	$result = mysql_query($query);
	while($data = mysql_fetch_array($result))
	{
		echo $data['firstname']." ".$data['lastname']."\n";
	}
	
	$email	     = $_POST["email"];
	$course_num   = $_POST["course_num"];
	
	echo "hi";
	/*
	$query = "INSERT INTO `users`( `lastname`, `firstname`, `email`, `password`, `level`, `securityq`, `answer`) VALUES ('ASD','ASDASDDS','something@something.com','HAHAHAH','TA','What\'s my name?','None');";
	$result = mysql_query($query);
	*/
	
	$email = "susanliu@mac.com";
	
	// CONSTRUCT THE SQL QUERY TO CHECK EXISTENCE OF TA
	$sql = 
	"
	SELECT user_id FROM users
	WHERE email = '$email';
	";
	echo $sql;
	$user_id = mysql_query($sql);
	
	while($data1 = mysql_fetch_array($user_id))
	{
		echo $data1['user_id']."\n";
		echo "hi";
	}
	
	
	
?>