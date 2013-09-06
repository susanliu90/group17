<?php
	// CHECK IF COURSE EXIST
	function exc($course_num)
	{
		$sql =
		"
		SELECT * FROM courses
		WHERE course_num = '$course_num';
		";

		$result = mysql_query($sql);

		if (!$result)
		{
			echo 
			"
			<script type='text/javascript'>
				alert('Course does not exist. Please try again.');
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

		$result = mysql_query($sql);

		if ($result)
		{
			echo
			"
				<script>
				    if (window.confirm('TA already exists. Click either button to go back.')) {
				        window.location.href='../html/addtas.html';
				    }
				    else
				    	window.location.href='../html/addtas.html';
				</script>
			";
			return true;
		}
		return false;
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