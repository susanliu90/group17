<?php
	// CHECK IF COURSE EXIST
	function exc($course_num)
	{
		$sql =
		"
		SELECT * FROM courses
		WHERE course_num = '$course_num';
		";

		$courses = mysql_query($sql);
/*
		while ($row = mysql_fetch_assoc($courses))
		{
			//echo $data1["user_id"];
			$course_num = $row["course_num"];
		}
*/
		$num_rows = mysql_num_rows($courses);

/* 		echo "course num: $course_num <br>"; */
/* 		echo "NUM ROWS: $num_rows<BR>"; */

		if (!$num_rows)
		{
			echo 
			"
				<script>
			   if (window.confirm('Course does not exist. Click either button to go back.')) {
			        window.location.href='../html/addtas.php';
			    }
			    else
			    	window.location.href='../html/addtas.php';
				</script>
			";
			return false;
		}
		return true;
	}

	function ext($ta_id)
	{
		$sql =
		"
		SELECT * FROM tas
		WHERE ta_id = '$ta_id';
		";

		$tas = mysql_query($sql);
		$num_rows = mysql_num_rows($tas);

/* 		echo "tas: $ta_id <br>"; */
/* 		echo "NUM ROWS: $num_rows<BR>"; */

		if (!$tas)
		{
/* 			echo "slalalalala<br>"; */
			echo
			"
				<script>
				    if (window.confirm('TA already exists. Click either button to go back.')) {
				        window.location.href='../html/addtas.php';
				    }
				    else
				    	window.location.href='../html/addtas.php';
				</script>
			";
			return false;
		}
		else{
			//echo "got here 2.";
			return true;
		}


	}

		/*
	function exp($prof_id)
	{
		$sql =
		"
		SELECT * FROM professors
		WHERE prof_id = $prof_id;
		";

		$result = mysql_query($sql);

		if (!$result)
		{
			echo 
			"
			<script type='text/javascript'>
				alert('Professor does not exist. Please try again.');
			</script>
			";
			exit(1);
		}
	}
	*/


	/*
	function exs($student_id)
	{
		$sql =
		"
		SELECT * FROM students
		WHERE student_id = $student_id;
		";

		$result = mysql_query($sql);

		if (!$result)
		{
			echo 
			"
			<script type='text/javascript'>
				alert('Student does not exist. Please try again.');
			</script>
			";
			exit(1);
		}
	} 
	*/	
?>