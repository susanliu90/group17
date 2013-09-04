
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
	    
		
	$firstName   = $_POST["firstName"];
	$lastName    = $_POST["lastName"];
	$email	     = $_POST["email"];
	$courseNum   = $_POST["course"];
	
	
	// Insert data into mysql
	$sql="INSERT INTO ta (lastName, firstName, email, course_num)
		VALUES ($lastName, $firstName, $email, $courseNum)"; 
	$result = mysql_query($sql);
	
	$sql="SELECT ta_id FROM ta 
		WHERE firstName = $firstName
		AND lastName = $lastName
		AND email = $email
		AND course_num = $courseNum"

	$result = mysql_query($sql);
	$taId = mysql_num_rows($result);

	$sql="INSERT INTO ta_list (course_num, ta_id)
		VALUES ($courseNum, $taId)";

	if($result){
		header("Location: ../html/addtas.html");
	}
	else {
		echo "ERROR";
	}

	//close mySQL
	mysql_close();


?>