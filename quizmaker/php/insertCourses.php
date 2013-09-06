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
	// $course_num  = $_POST["course-num"];
	// $course_sched  = $_POST["course-sched"];
	// $course_loc  = $_POST["course-loc"];

	//echo "$course_num";
	
	// CONSTRUCT THE SQL QUERY TO CHECK EXISTENCE OF COURSE
	// $courses = 
	// "
	// SELECT course_num FROM courses
	// WHERE course_num = '$course_num';
	// ";
	// $query = mysql_query($sql);
	// $result = mysql_fetch_assoc($query);
	// while ($course = mysql_fetch_assoc($result))
	// {
	// 	$course_num1 = $course['course_num'];
	// }

	// if(exc($course_num))
	// {
	// 	//echo "got here 1";
	// 	// CONSTRUCT THE SQL QUERY TO INSERT NEW TA
	// 	$sql = 
	// 	"
	// 	INSERT INTO courses (
	// 		course_num,
	// 		course_sched,
	// 		course_loc
	// 	) 
	// 	VALUES (
	// 		'$course_num', 
	// 		'$course_sched',
	// 		'$course_loc'
	// 	);"; 	
	// 	$result = mysql_query($sql);	
	// }

	// REDIRECT USER TO SAME PAGE AFTER SUBMISSION
	header("Location: ../html/coursemanager.php");
	
	// CLOSE THE SQL CONNECTION
	mysql_close();
?>