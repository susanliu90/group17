
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
		
	$firstName   = $_POST["stu-fname"];
	$lastName    = $_POST["stu-lname"];
	$email	     = $_POST["stu-email"];
	$courseNum   = $_POST["course"];
	
	// see if student already exist in users
	$sql="SELECT * FROM users
		WHERE firstName = $firstName
		AND lastName = $lastName
		AND email = $email
		AND level='student'"
	$result = mysql_query(sql);

	// if student does not exit in users, insert into all tables
	if (!$result) {
		// insert data into users
		$sql="INSERT INTO users (lastName, firstName, email, level
			VALUES ($lastName, $firstName, $email, 'student'"
		$result = mysql_query($sql);
	}
	else {
		// find user_ids from users
		$sql="SELECT user_id FROM users
			WHERE firstName = $firstName
			AND lastName = $lastName
			AND email = $email
			AND level='student'"
		$result = mysql_query($sql);
		// insert user_ids into student - WILSON
	}

	// we should also check if the student has already been previously added to the same class - WILSON

	// insert data into student (grades_id is NULL)
	$sql="INSERT INTO students (lastName, firstName, email, course_num)
		VALUES ($lastName, $firstName, $email, $courseNum)"; 
	$result = mysql_query($sql);

	// find student_ids to put into student_list
	$sql="SELECT student_id FROM students 
		WHERE firstName = $firstName
		AND lastName = $lastName
		AND email = $email
		AND course_num = $courseNum"
	$result = mysql_query($sql);
	$studentId = mysql_num_rows($result);
	$sql="INSERT INTO student_list (student_id, course_num)
		VALUES ($studentId, $courseNum)";
	if($result){
		header("Location: ../html/addstudents.html");
	}
	else {
		echo "ERROR";
	}

	//close mySQL
	mysql_close();
?>