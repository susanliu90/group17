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

	$query = "SELECT * FROM users;";
	$students = mysql_query($query);
	$query_ = "SELECT course_num FROM students WHERE user_id = '$user_id';";
	$query__ = mysql_query($query_);

	while (($row = mysql_fetch_array($students, MYSQL_ASSOC))
		&& ($row1 = mysql_fetch_array($query__, MYSQL_ASSOC)))
	{
		// GRAB THE POST INFORMATION
		$lastname	= $row["lastname"];
		$firstname  = $row["firstname"];
		$email      = $row["email"];
		$user_id    = $row["user_id"];
		$course_num = $row1["course_num"];

		echo "<tr>
					<td class=\"span2 align-center\">"
						.$firstname." ".$course_num.
					"</td>
					<td class=\"span2 align-center\">"
						.$email.
					"</td>
					<td class=\"span2 align-center\">"
						.$course_num.
					"</td>
					<td class=\"span2 align-center\">
						<form method=\"post\" action=\"../php/edit.php\" onsubmit=\"return muModal(this)\">
						  <input type=\"submit\" class=\"btn btn-primary btn-small\" value=\"Edit\">
						</form>
					</td>
					<td class=\"span2 align-center\">
						<form action=\"../php/deleteStudents.php\" method=\"POST\">
							<input type=\"hidden\" name=\"firstname\" value=\"".$firstname."\">
							<input type=\"hidden\" name=\"lastname\" value=\"".$lastname."\">
							<input type=\"hidden\" name=\"email\" value=\"".$email."\">
							<input type=\"submit\" class=\"btn btn-primary btn-small\" value=\"Delete\">
						</form>
					</td>
			</tr>";
	}

	mysql_close();
?>