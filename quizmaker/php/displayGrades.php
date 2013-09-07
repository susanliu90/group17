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

	$query = "SELECT * FROM grades;";
	$grades = mysql_query($query);

	// $course_num = "SELECT * FROM users WHERE level = 'TA';";
	// $tas = mysql_query($sql);

	while ($row = mysql_fetch_array($grades, MYSQL_ASSOC))
	{
		$course_num = $row["course_num"];
		$aplus = $row["aplus"];
		$a = $row["a"];	
		$aminus = $row["aminus"];
		$bplus = $row["bplus"];
		$b = $row["b"];
		$bminus = $row["bminus"];
		$cplus = $row["cplus"];
		$c = $row["c"];
		$cminus = $row["cminus"];
		$d = $row["d"];
		$f = $row["f"];

		echo "<tr>
					<td class=\"span2 align-center\">"
						.$course_num.
					"</td>
					<td class=\"span2 align-center\">"
						.$aplus.
					"</td>
					<td class=\"span2 align-center\">"
						.$a.
					"</td>
					<td class=\"span2 align-center\">"
						.$aminus.
					"</td>
					<td class=\"span2 align-center\">"
						.$bplus.
					"</td>
					<td class=\"span2 align-center\">"
						.$b.
					"</td>
					<td class=\"span2 align-center\">"
						.$bminus.
					"</td>
					<td class=\"span2 align-center\">"
						.$cplus.
					"</td>
					<td class=\"span2 align-center\">"
						.$c.
					"</td>
					<td class=\"span2 align-center\">"
						.$cminus.
					"</td>
					<td class=\"span2 align-center\">"
						.$d.
					"</td>
					<td class=\"span2 align-center\">"
						.$f.
					"</td>
					<td class=\"span2 align-center\">
						<form method=\"post\" action=\"../php/edit.php\" onsubmit=\"return muModal(this)\">
						  <input type=\"submit\" class=\"btn btn-primary btn-small\" value=\"Edit\">
						</form>
					</td>
					<td class=\"span2 align-center\">
						<form action=\"../php/deleteCourse.php\" method=\"POST\">
							<input type=\"hidden\" name=\"course_num\" value=\"".$course_num."\">
							<input type=\"hidden\" name=\"aplus\" value=\"".$aplus."\">
							<input type=\"hidden\" name=\"a\" value=\"".$a."\">
							<input type=\"hidden\" name=\"aminus\" value=\"".$aminus."\">
							<input type=\"hidden\" name=\"bplus\" value=\"".$bplus."\">
							<input type=\"hidden\" name=\"b\" value=\"".$b."\">
							<input type=\"hidden\" name=\"bminus\" value=\"".$bminus."\">
							<input type=\"hidden\" name=\"cplus\" value=\"".$cplus."\">
							<input type=\"hidden\" name=\"c\" value=\"".$c."\">
							<input type=\"hidden\" name=\"cminus\" value=\"".$cminus."\">
							<input type=\"hidden\" name=\"d\" value=\"".$d."\">
							<input type=\"hidden\" name=\"f\" value=\"".$f."\">
							<input type=\"submit\" class=\"btn btn-primary btn-small\" value=\"Delete\">
						</form>
					</td>
			</tr>";
	}

	mysql_close();
?>