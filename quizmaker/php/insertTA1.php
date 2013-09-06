<?php
	include 'functions.php';
	// SET UP THE SQL CONNECTION
	$db_hostname = "localhost";
	$db_database = "quizzler"; 
	$db_username = "s17";
	$db_password = "groupe17";

	// CONNECT TO THE DATABASE
	$DBH = mysql_connect($db_hostname, $db_username, $db_password) OR die("AHAHA you suck");
		mysql_select_db($db_database);

	// GRAB THE POST INFORMATION
	$email	     = $_POST["email"];
	$course_num  = $_POST["course_num"];
	
	// CONSTRUCT THE SQL QUERY TO CHECK EXISTENCE OF TA
	#creating the statement
	$STH = $DBH->query('SELECT *FROM users
	WHERE email = $email;');
	
	#setting the fetch mode
	$STH->setFetchMode(PDO::FETCH_OBJ);
	
	#check for duplicates
	if($result = $STH->fetch())
	{
		//CHECK FOR DUPLICATES
		$STH = $DBH->query('SELECT * FROM tas WHERE user_id = (
	    SELECT user_id FROM users 
		WHERE email = $email) AND
		course_num = $course_num;');
		
		//TA ALREADY EXISTS IN THE DATABASE
		if($result = $STH->fetch())
		{
			echo 
			"
			<script type='text/javascript'>
				alert('User does not exist. Please try again');
			</script>
			";
		}		
	
		// CHECK IF COURSE EXISTS
		exc($course_num);
		
		
		// CONSTRUCT THE SQL QUERY TO INSERT NEW TA
		$data = array('user_id' => $user_id, 'course_num' => $course_num);
		
		$STH = $DBH->("INSERT INTO ta (
			user_id,
			course_num
		) 
		VALUES (
			:user_id, 
			:course_num
		);
		"); 

		$STH->execute($data);
		
		
		// CONSTRUCT THE SQL QUERY TO SELECT THE AUTO GENERATED ID
		$STH = $DBH->query('SELECT ta_id 
		FROM ta 
		WHERE 
		user_id = $user_id AND
		course_num = $course_num;');

		$result = $STH->fetch();
		$ta_id = $result->fetchColumn();

		// CONSTRUCT THE SQL QUERY TO INSERT NEW TA INTO TA LIST
		$data = array('ta_id' => $ta_id, 'course_num' => $course_num);
		$STH = $DBH->("INSERT INTO ta_list (
			ta_id, 
			course_num
		)
		VALUES 
		(
			:ta_id, 
			:course_num
		);
		");

		$STH->execute($data);
	}
	// TA DOES NOT EXIST
	else 
	{
		echo 
		"
		<script type='text/javascript'>
			alert('User does not exist. Please try again');
		</script>
		";
	}
	

	// REDIRECT USER TO SAME PAGE
	
	/* if($result){
		header("Location: ../html/addtas.html");
	}
	else {
		echo "ERROR";
	}*/

	// CLOSE THE SQL CONNECTION
	mysql_close();


?>