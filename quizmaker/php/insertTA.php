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
	SELECT email FROM users
	WHERE email = '$email';
	";
	$result = mysql_query($sql);
	
	$data = mysql_fetch_array($result);
	
	//if there is no duplicate. if the user_id is blank.
	//we are inserting user_id but we dont prompt the user for user_id
	if("".$data['email'] == $email)
	{
	
		echo "hi";
		echo $course_num;
		if ( exc($course_num) )
		{
			echo "bitches";
			// CONSTRUCT THE SQL QUERY TO INSERT NEW TA
			$sql = 
			"
			INSERT INTO tas (
				email,
				course_num
			) 
			VALUES (
				'$email', 
				'$course_num'
			);
			"; 	
			$result = mysql_query($sql);		
			echo "damn it!";
		}		
		echo $sql;
	}
	else //this is if there is a duplicate
	{
		echo 
			"
			<script type='text/javascript'>
				alert('User does not exist. Please create become a User first.');
			</script>
			";

	}
	

/*	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	if(!$user_id) 
	{
		// CHECK FOR DUPLICATES
		$sql = 
		"
	    SELECT * FROM tas WHERE user_id = (
	    SELECT user_id FROM users 
		WHERE email = $email) AND
		course_num = '$course_num';
		";
		$result = mysql_query($sql);

		// TA ALREADY EXISTS IN THE DATABASE
		if($result) 
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
		$sql = 
		"
		INSERT INTO ta (
			user_id,
			course_num
		) 
		VALUES (
			$user_id, 
			$course_num
		);
		"; 
		$result = mysql_query($sql);

		// CONSTRUCT THE SQL QUERY TO SELECT THE AUTO GENERATED ID
		$sql = 
		"
		SELECT ta_id 
		FROM ta 
		WHERE 
		user_id = $user_id AND
		course_num = '$course_num';
		";

		$result = mysql_query($sql);
		$ta_id = mysql_num_rows($result);

		// CONSTRUCT THE SQL QUERY TO INSERT NEW TA INTO TA LIST
		$sql = 
		"
		INSERT INTO ta_list (
			ta_id, 
			course_num
		)
		VALUES 
		(
			$ta_id, 
			$course_num
		);
		";
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

*/

?>