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

	$sql =
	"
	SELECT * FROM tas;
	"
	$tas = mysql_query($sql);

	while ($row = mysql_fetch_array($ta))
	{
		$ta_id = $row['ta_id'];
		$user_id = $row['user_id'];
		$course_num = $row['course_num'];

		$sql =
		"
		SELECT * FROM tas
		WHERE user_id = $user_id LIMIT 0,1;
		"
		$result = mysql_query($sql);

		$firstName = result['firstName'];
		$lastName = result['lastName'];
		$email = result['email'];

		echo "<tr>
				<td>" . $firstName $lastName . "</td>
				<td>" . $email . "</td>
				<td>" s. $course_num . "</td>
			</tr>";
	}
?>