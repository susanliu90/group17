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
	$email	     = $_POST["email"];
	$course_num  = $_POST["course_num"];
	
	// CONSTRUCT THE SQL QUERY TO CHECK EXISTENCE OF TA
	$sql = 
	"
	SELECT user_id FROM users
	WHERE email = $email;
	";
	$user_id = mysql_query($sql);
	
	if(!$user_id) 
	{
		// CHECK IF COURSE EXISTS
		exc($course_num);

		// CONSTRUCT THE SQL QUERY TO GRAB ID OF TA
		$sql = 
		"
		SELECT ta_id FROM tas
		WHERE 
			user_id = $user_id AND
			course_num = $course_num;
		";
		$ta_id = mysql_query($sql);

		// CONSTRUCT THE SQL QUERY TO DELETE TA
		$sql = 
		"
		DELETE FROM tas 
		WHERE	
			email = $email AND
			course_num = $course_num;
		";		 
		$result = mysql_query($sql);

		// CONSTRUCT THE SQL QUERY TO DELETE TA FROM TA LIST
		$sql = 
		"
		DELETE FROM ta_list 
		WHERE	
			ta_id = $ta_id AND
			course_num = $course_num;
		";		 
		$result = mysql_query($sql);
	}
	// TA DOES NOT EXIST
	else 
	{
		echo 
		"
		<script type='text/javascript'>
			alert('TA does not exist. Please try again');
		</script>
		";
		exit(1);
	}
	
	// REDIRECT USER TO SAME PAGE AFTER SUBMISSION
	header("Location: ../html/addtas.html");

	// CLOSE THE SQL CONNECTION
	mysql_close();
?>