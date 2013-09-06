<?php
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

	$ta = "SELECT * FROM users WHERE level = 'TA';";
	$tas = mysql_query($ta);

	$course_num = "SELECT * FROM users WHERE level = 'TA';";
	$tas = mysql_query($sql);

	while ($row = mysql_fetch_array($tas, MYSQL_ASSOC))
	{
		$firstName = $row['firstname'];
		$lastName = $row['lastname'];
		$email = $row['email'];

		echo "<tr>
<<<<<<< HEAD
				<td id=>" . $firstName $lastName . "</td>
				<td>" . $email . "</td>
				<td>" s. $course_num . "</td>
			</tr>";
=======
			<td>".$firstName." ".$lastName."</td>
			<td>".$email."</td>
			<td>".$course_num."</td>
		</tr>";
>>>>>>> aa41b7bfaaec6c1270937d569a6a67f63baa4948
	}

	mysql_close();
?>