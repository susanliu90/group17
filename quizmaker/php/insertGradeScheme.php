
<?php
	//l
	$db_hostname = "hostname";
	$db_database = "quizzler";
	$db_username = "user";
	$db_password = "";

	//connect to db
	$db_server = mysql_connect($db_hostname, $db_username, $db_password)
		or die("There was an error connecting to the database:" .mysql_error());
		
	// Select the database.
	mysql_select_db($db_database)
	    or die("Unable to select database: " . mysql_error());
	    
		
   //set variables. NEED TO MATCH corresponding fields in HTML
	$course      = $_POST["course"];
	$aplus	    = $_POST["aplus"];
	$a 			 = $_POST["a"];	
	$aminus 		 = $_POST["aminus"];
	$bplus 		 = $_POST["bplus"];
	$b 			 = $_POST["b"];
	$bminus 		 = $_POST["bminus"];
	$cplus 		 = $_POST["cplus"];
	$c 			 = $_POST["c"];
	$cminus 		 = $_POST["cminus"];
	$d 			 = $_POST["d"];
	$f 			 = $_POST["f"]
	
	
	// Insert data into mysql. NEEDS TO BE IN CORRECT ORDER.
	$sql="INSERT INTO users (course, aplus, a, aminus, bplus, b, bminus, cplus, c, cminus, d, f)
		VALUES ("$course", "$aplus", "$a", "$aminus", "$bplus", "$b", "$bminus", "$cplus", "$c", "$cminus", "$d", "$f" "; //is this syntax good?
	$result = mysql_query($sql);
	
	
	// if successfully insert data into database, displays message "Successful".
	if($result){
		header("Location: ../thankyou.php");
	}
	else {
		echo "ERROR";
	}

	//close mySQL
	mysql_close();


?>