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
	$email = $_POST["email"];
	$course_num = $_POST["course_num"];

	//echo "$course_num";

	// CONSTRUCT THE SQL QUERY TO CHECK EXISTENCE OF TA
	$sql = 
	"
	SELECT user_id FROM users
	WHERE email = '$email';
	";
	$user_ids = mysql_query($sql);
	while ($row = mysql_fetch_assoc($user_ids, MYSQL_ASSOC))
	{
		//echo $data1["user_id"];
		$user_id = $row["user_id"];
	}

/* 	echo "User ID: $user_id<BR>"; */

	$dup_ta =
	"
	SELECT ta_id FROM tas
	WHERE user_id = '$user_id';
	";
	$result = mysql_query($dup_ta);
	while ($row = mysql_fetch_assoc($result))
	{
		//echo $data1["user_id"];
		$ta_id = $row["ta_id"];
	}

/* 	echo "TA ID: $ta_id<BR>"; */

	//if there is no duplicate. if the user_id is blank.
	//we are inserting user_id but we dont prompt the user for user_id
	if($user_id)
	{

/* 		echo "hi<br>"; */
		//echo $course_num;
		if ( exc($course_num) )
		{
			//echo "course num : $course_num  <br>";
			if( ext($ta_id) )
			{
				//echo "got here 1";
				// CONSTRUCT THE SQL QUERY TO INSERT NEW TA
				$sql = 
				"
				INSERT INTO tas (
					user_id,
					course_num
				) 
				VALUES (
					'$user_id', 
					'$course_num'
				);
				"; 	
				$result = mysql_query($sql);	
			}	
		}		
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
	// REDIRECT USER TO SAME PAGE AFTER SUBMISSION
	header("Location: ../html/addtas.php");

	// CLOSE THE SQL CONNECTION
	mysql_close();
?>