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
		while ($data = mysql_fetch_assoc($result))
		{
			//echo $data1["user_id"];
			$course_numResult = $data["course_num"];
		}
		
		//echo "$course_numResult <br>";

		if (!$course_numResult)
		{
			echo 
			"
				<script>
			   if (window.confirm('Course does not exist. Click either button to go back.')) {
			        window.location.href='../html/addtas.html';
			    }
			    else
			    	window.location.href='../html/addtas.html';
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
		WHERE ta_id = $ta_id;
		";

		$result = mysql_query($sql);

		if ($result)
		{
			echo "slalalalala";
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