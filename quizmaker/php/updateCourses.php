<?php
	include 'functions.php';
	// SET UP THE SQL CONNECTION
	$db_hostname = "localhost";
	$db_database = "quizzler"; 
	$db_username = "s17";
	$db_password = "groupe17";

	// CONNECT TO THE DATABASE
	$db_server = mysql_connect($db_hostname, $db_username, $db_password)
		or die("There was an error connecting to the database:" . mysql_error());

	// SELECT THE DATABASE
	mysql_select_db($db_database)
	    or die("Unable to select database: " . mysql_error());
		
	// GRAB THE POST INFORMATION
	$course_num  = $_POST["course_num"];
	$course_sched  = $_POST["course_sched"];
	$course_loc  = $_POST["course_loc"];
	
	// CONSTRUCT THE SQL QUERY TO CHECK EXISTENCE OF TA
	$sql = 
	"
	SELECT course_num FROM courses
	WHERE course_num = '$course_num' AND course_sched = '$course_sched' AND course_loc = '$course_loc';
	";
	$query = mysql_query($sql);
	$num_rows = mysql_num_rows($query);
	// echo $sql;
	// echo $num_rows;

	// while ($row = mysql_fetch_array($query, MYSQL_ASSOC))
	// {
	// 	$c_num = $row['course_num'];
	// 	$c_sched = $row['course_sched'];
	// 	$c_loc = $row['course_loc'];
	// }

	if ($num_rows)
	{
		echo "string";
		$sql = 
		"
		UPDATE FROM courses
		WHERE course_num = '$course_num' AND course_sched = '$course_sched' AND course_loc = '$course_loc';
		";
		$query = mysql_query($sql);
	}
	
	// REDIRECT USER TO SAME PAGE AFTER SUBMISSION
	header("Location: ../html/coursemanager.php");

	// CLOSE THE SQL CONNECTION
	mysql_close();
?>