<?php
echo "hello";
	include 'insertProfessor.php';
	
	$selectedLevel = $_POST['level'];
	echo "hello";
	if($selectedLevel == "admin")
	{
		echo "hello";
		insertProfessor();
	}
	
?>