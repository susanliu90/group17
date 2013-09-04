<?php
	$sql =
	"
	SELECT * FROM tas;
	"
	$tas = mysql_query($sql);


	foreach ($tas as $ta)
	{
		$ta_id = $ta['ta_id'];
		$user_id = $ta['user_id'];
		$course_num = $ta['course_num'];

		$sql =
		"
		SELECT * FROM tas
		WHERE user_id = $user_id;
		"
		$result = mysql_query($sql);

		$firstName = result['firstName'];
		$lastName = result['lastName'];
		$email = result['email'];

		echo "<tr>
				<td>" . $firstName $lastName . "</td>
				<td>" . $email . "</td>
				<td>" . $course_num . "</td>
			</tr>";
	}
?>