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
	$lastname	= $_POST["lastname"];
	$firstname  = $_POST["firstname"];
	$email      = $_POST["email"];
	$course_num = $_POST["course_num"];

	// CONSTRUCT THE SQL QUERY TO CHECK EXISTENCE OF TA
	$sql = 
	"
	SELECT email FROM users
	WHERE email = '$email';
	";
	$result = mysql_query($sql);
	$data = mysql_fetch_array($result);
	$ID = 
	"
	SELECT user_id FROM users
	WHERE email = '$email';
	";
	
	$result1 = mysql_query($ID);
	$data1 = mysql_fetch_assoc($result1);
	$user_id = $data1["user_id"];
	$dup_student =
	"
	SELECT student_id FROM students
	WHERE user_id = '$user_id';
	";
	$result2 = mysql_query($dup_student);
	$row_count = mysql_num_rows($result2);
	if($row_count != 0) 
	{
		echo 
		"
		<script type='text/javascript'>
			alert('Student with user_id already exists.');
		</script>
		";
		exit(1);
	}
	$data2 = mysql_fetch_assoc($result2);
	echo "$data2";
	$student_id = $data2["student_id"];
	
	//if there is no duplicate. if the user_id is blank.
	//we are inserting user_id but we dont prompt the user for user_id
	if("".$data['email'] == $email)
	{
		if (exc($course_num))
		{
			// CONSTRUCT THE SQL QUERY TO INSERT NEW STUDENT
			$sql = 
			"
			INSERT INTO students (
				user_id,
				course_num,
				grades_id
			) 
			VALUES (
				'$user_id', 
				'$course_num',
				'null'
			);
			"; 	
			$result = mysql_query($sql);	
		}		
	}
	else //this is if there is a duplicate
	{
		echo 
			"
			<script type='text/javascript'>
				alert('User does not exist. Please create a User first.');
			</script>
			";

	}
	// REDIRECT USER TO SAME PAGE AFTER SUBMISSION
	header("Location: ../html/addstudents.php");
	
	// CLOSE THE SQL CONNECTION
	mysql_close();
?>