<?php
/* 	include 'functions.php'; */
	// SET UP THE SQL CONNECTION
	$db_hostname = "localhost";
	$db_database = "quizzler"; 
	$db_username = "s17";
	$db_password = "groupe17";
/* echo "hhhhh"; */
	// CONNECT TO THE DATABASE
	$db_server = mysql_connect($db_hostname, $db_username, $db_password)
		or die("There was an error connecting to the database:" . mysql_error());
/* echo "hhhhh"; */
	// SELECT THE DATABASE
	mysql_select_db($db_database)
	    or die("Unable to select database: " . mysql_error());
/* 	    echo "hhhhh<br>"; */
	// GRAB THE POST INFORMATION
   //set variables. NEED TO MATCH corresponding fields in HTML
	$course_num = $_POST["course_num"];
	$aplus = $_POST["aplus"];
	$a = $_POST["a"];	
	$aminus = $_POST["aminus"];
	$bplus = $_POST["bplus"];
	$b = $_POST["b"];
	$bminus = $_POST["bminus"];
	$cplus = $_POST["cplus"];
	$c = $_POST["c"];
	$cminus = $_POST["cminus"];
	$d = $_POST["d"];
	$f = $_POST["f"];
	
/* 	echo "hhhhh"; */
	// CONSTRUCT THE SQL QUERY TO CHECK EXISTENCE OF TA
	$sql = 
	"
	SELECT course_num FROM courses
	WHERE course_num = '$course_num';
	";
	$query = mysql_query($sql);
	
	while ($course = mysql_fetch_assoc($query))
	{
		//echo $data1["user_id"];
		$c_num = $course["course_num"];
	}
	echo $course_num;
	echo $sql;
	echo $c_num;
	if ($c_num)
	{
		echo 
			"
			<script>
			var r=confirm('Click either to go back to the home page.');
			if (r==true)
			  window.location.href='../html/grademanager.php';
			else
			  window.location.href='../html/grademanager.php';
			 </script
			";
	}
	else
	{
		$sql = 
		"
		INSERT INTO grades (
			course_num,
			aplus,
			a,
			aminus,
			bplus,
			b,
			bminus,
			cplus,
			c,
			cminus,
			d,
			f 			 
		) 
		VALUE (
			'$course_num',
			'$aplus',
			'$a',
			'$aminus',
			'$bplus',
			'$b',
			'$bminus',
			'$cplus',
			'$c',
			'$cminus',
			'$d',
			'$f' 		
		);
		"; 	
		$result = mysql_query($sql);	
/* 			print "got here"; */
		}
	

	// REDIRECT USER TO SAME PAGE AFTER SUBMISSION
	header("Location: ../html/grademanager.php");
	
	// CLOSE THE SQL CONNECTION
	mysql_close();
?>