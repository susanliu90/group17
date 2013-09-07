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

	$query = "SELECT * FROM courses;";
	$courses = mysql_query($query);

	// $course_num = "SELECT * FROM users WHERE level = 'TA';";
	// $tas = mysql_query($sql);

	while ($row = mysql_fetch_array($courses, MYSQL_ASSOC))
	{
		$course_num = $row['course_num'];
		$course_sched = $row['course_sched'];
		$course_loc = $row['course_loc'];

		echo "<tr>
					<td id=\"course_num\" class=\"span2 align-center\"><span contenteditable=\"false\">"
						.$course_num.
					"</span></td>
					<td class=\"span2 align-center\"><span id=\"course_sched".$course_num."\" contenteditable=\"true\">"
						.$course_sched.
					"</span></td>
					<td class=\"span2 align-center\"><span id=\"course_loc".$course_num."\" contenteditable=\"true\">"
						.$course_loc.
					"</span></td>
					<td class=\"span2 align-center\">
						<form method=\"post\" action=\"../php/updateCourses.php\">
						  <input type=\"hidden\" name=\"course_num\" value=\"".$course_num."\">
							<input type=\"hidden\" name=\"course_sched\" value=\"<script>document.getElementById(course_sched".$course_num.").innerHTML;</script>\">
							<input type=\"hidden\" name=\"course_loc\" value=\"<script>document.getElementById(course_loc".$course_num.").innerHTML;</script>\">
						  <input type=\"submit\" class=\"btn btn-primary btn-small\" value=\"Update\">
						</form>
					</td>
					<td class=\"span2 align-center\">
						<form action=\"../php/deleteCourse.php\" method=\"POST\">
							<input type=\"hidden\" name=\"course_num\" value=\"".$course_num."\">
							<input type=\"hidden\" name=\"course_sched\" value=\"".$course_sched."\">
							<input type=\"hidden\" name=\"course_loc\" value=\"".$course_loc."\">
							<input type=\"submit\" class=\"btn btn-primary btn-small\" value=\"Delete\">
						</form>
					</td>
			</tr>";
	}

	mysql_close();
?>