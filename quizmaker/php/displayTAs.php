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
	
	while ($row = mysql_fetch_array($tas, MYSQL_ASSOC))
	{
		$user_id = $row['user_id'];
		$firstName = $row['firstname'];
		$lastName = $row['lastname'];
		$email = $row['email'];
		
		$query = "SELECT course_num FROM tas WHERE user_id = $user_id LIMIT 0,1;";
		list($course_num) = mysql_query($query);

		echo "<tr>

			<td class=\"span3 align-center\">".$firstName." ".$lastName."</td>
			<td class=\"span3 align-center\">".$email."</td>
			<td class=\"span3 align-center\">".$course_num."</td>
			<td class=\"span3 align-center\">
				<input type=\"button\" class=\"btn btn-primary btn-small\" value=\"Edit\">
			</td>
			<td class=\"span3 align-center\"><a href=\"#\"><i class=\"icon-trash\"></i></a></td>
			</tr>";
	}

	mysql_close();
?>