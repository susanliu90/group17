<?php
	// set up the SQL connection
	$db_hostname = "hostname";
	$db_database = "quizzler"; 
	$db_username = "user";
	$db_password = "";

	// connect to the DB
	$db_server = mysql_connect($db_hostname, $db_username, $db_password)
		or die("There was an error connecting to the database:" .mysql_error());

	// select the DB
		mysql_select_db($db_database)
	    or die("Unable to select database: " . mysql_error());

	$courseNum   = $_POST["course-num"];
	$courseSched = $_POST["course-sched"];
	$courseLoc	 = $_POST["course-loc"];
	$coursePwd   = $_POST["course-pwd"]; 	

	// Insert data into mysql
	$sql="INSERT INTO courses (courseNum, courseSched, courseLoc, coursePwd)
		VALUES ($courseNum, $courseSched, $courseLoc, $coursePwd);";
	$result = mysql_query($sql);

	if($result){
		header("Location: ../html/coursemanager.html");
	}
	else {
		echo "ERROR";
	}

	//close mySQL
	mysql_close();
?>