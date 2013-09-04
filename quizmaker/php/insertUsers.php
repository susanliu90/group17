<!--
<b>First name:</b> <?php echo $_POST["firstname"]; ?>
<br>
<b>Last name:</b> <?php echo $_POST["lastname"]; ?>
<br>
<b>Email:</b> <?php echo $_POST["email"]; ?>
<br>
<b>Password:</b> <?php echo $_POST["pwd"]; ?>
<br>
<b>Confirmed password:</b> <?php echo $_POST["pwdConfirm"]; ?>
<br>
<b>Level:</b> <?php echo $_POST["level"]; ?>
<br>
<b>Security Question:</b> <?php echo $_POST["security"]; ?>
<br>
<b>Answer:</b> <?php echo $_POST["answer"]; ?>
<br>
-->

<?php
	//login.php
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
	    
		
	$firstName   = $_POST["firstname"];
	$lastName    = $_POST["lastname"];
	$email	    = $_POST["email"];
	$password    = $_POST["pwd"]; //probably dont need this.
	$pwConfirm   = $_POST["pwdConfirm"];
	$level 	    = $_POST["level"];
	$secQuestion = $_POST["securityq"];
	$answer		 = $_POST["answer"];		
	
	
	// Insert data into mysql
	$sql="INSERT INTO users (firstName, lastName, email, password, pwConfirm, level, secQuestion, answer)
		VALUES ("$firstName", "$lastName", "$email", SHA1("$password"), NOW(), "$pwConfirm", "$level", "$secQuestion", "$answer" "); //is this syntax good?
	$result = mysql_query($sql);
	
	
	// if successfully insert data into database, displays message "Successful".
	if($result){
		echo("woo hoo!");
	}
	else {
		echo "ERROR";
	}

	//close mySQL
	mysql_close();


?>