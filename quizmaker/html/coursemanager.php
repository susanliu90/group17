﻿<!DOCTYPE html>
<!--
 *  ***************************************
 *	CSE134B Web-Client Languages
 *	Quiz Maker Project: The Quizzler
 * 	Authors: Group 15 - PHO DUH NGUYEN
 *	Summer 2013
 *
 *	Assignment 1-4: The Quizzler
 *	Content: builder.html 
 *	
 *  ***************************************
 * -->
<html>
<head>
	<meta charset='utf-8'> 
	<title>QUIZZLER</title>
	<!-- CSS files -->
	<link rel="stylesheet" href="../css/jquery-ui.css" />
	<link rel="stylesheet" href="../css/bootstrap.css" >
	<link rel="stylesheet" href="../css/bootstrap-responsive.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-modal.css">
	<link rel="stylesheet" href="../css/builder.css" />	
	<link rel="stylesheet" href="../shadowbox-3.0.3/shadowbox.css"/>	
	<!-- JS files -->
	<script src="../js/ajaxtcr.js" type="text/javascript"></script>
	<script src="../js/jquery-1.9.1.js"></script>
	<script src="../js/jquery-1.10.2.min.js"></script>
	<script src="../js/jquery-ui.js"></script>
	<script src="../js/json2.js"></script>
	<script src="../js/jquery.mockjax.js"></script>
	<script src="../js/builder.js"></script>	
	<script src="../js/jquery-pajinate.js"></script>
	<script src="../js/jquery.tinysort.js"></script>
	<script src="../bootstrap/js/bootstrap-modal.js"></script>
	<script src="../bootstrap/js/bootstrap-modalmanager.js"></script>
	<script src="../shadowbox-3.0.3/shadowbox.js"></script>
	<script src="../js/135.js"></script>
	<script src="../js/dropdown.js"></script>

	<script type="text/javascript">
	
		Shadowbox.init({
			handleOversize: "drag",
			modal: true
		});
		
	</script>

</head>
<body onload="startTime()">
	<!--Right Sidescroll Bar-->
	<div id="sidescroll" class="sidescrollclass">
		<div id="sidescroll-title">
			<h4 style="font-size:10px;color: white;margin: 10px;text-align: center;">Quiz Navigator</h4>
		</div>
		<p style="color:white;"><input class= "ListingOption" onclick="hideMe2(this);" type="checkbox"> List Question </p>
		<ul id="page1" class="rightscroll ui-sortable" style="list-style:none"><li> Page 1 </li><li class='rightqlist' draggable='true' id="smytab-1">Section 1</li> </ul>
		<ul id="page2" class="rightscroll ui-sortable" style="list-style:none"><li> Page 2 </li></ul>
		<ul id="page3" class="rightscroll ui-sortable" style="list-style:none"><li> Page 3 </li></ul>
		<ul id="page4" class="rightscroll ui-sortable" style="list-style:none"><li> Page 4 </li></ul>
		<ul id="page5" class="rightscroll ui-sortable" style="list-style:none"><li> Page 5 </li></ul>
	</div>
	
	<!-- Navigation bar on the top -->
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">     
          <a class="brand" href="../homepage.html" tabindex=3><img src="../img/logo1.png"></a>
          <div class="nav-collapse collapse pull-right"> <!-- start copying -->
            <p class="navbar-text">
            	<div class="btn-group btn-pad-right">
				  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
				    ADMINISTRATOR
				    <span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu menu-pull-left">
				    <!-- dropdown menu links -->
				        <li><a tabindex="-1" href="../html/coursemanager.php">Manage Courses</a></li>
					    <li><a tabindex="-1" href="../html/addstudents.php">Manage Students</a></li>
					    <li><a tabindex="-1" href="../html/addtas.php">Manage Teaching Assistants</a></li>
					    <li><a tabindex="-1" href="../html/grademanager.php">Manage Grading Schemes</a></li>
					    <li class="divider"></li>
					    <li><a tabindex="-1" href="../homepage.html">Logout</a></li>
				  </ul>
				</div> <!-- stop copying -->
            </div>
			<!-- Gallery of images for the help feature -->
				<a href="../img/helpMechanism/tutorial0.png" rel="shadowbox[helpMechanism]"></a>
				<a href="../img/helpMechanism/tutorial1.png" rel="shadowbox[helpMechanism]"></a>
				<a href="../img/helpMechanism/tutorial2.png" rel="shadowbox[helpMechanism]"></a>
				<a href="../img/helpMechanism/tutorial3.png" rel="shadowbox[helpMechanism]"></a>
				<a href="../img/helpMechanism/tutorial4.png" rel="shadowbox[helpMechanism]"></a>
				<a href="../img/helpMechanism/tutorial5.png" rel="shadowbox[helpMechanism]"></a>
				<a href="../img/helpMechanism/tutorial6.png" rel="shadowbox[helpMechanism]"></a>
				<a href="../img/helpMechanism/tutorial7.png" rel="shadowbox[helpMechanism]"></a>
          </div> <!--/.nav-collapse -->
        </div>
      </div>
    </div>
	<!--TOOLBOX with features-->
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
            	<li class="nav-header">Admin Toolbar</li>
            	<li class="active"><a href="coursemanager.php">Manage Courses</a></li>
				<li><a href="addstudents.php">Manage Students</a></li>
				<li><a href="addtas.php">Manage Teaching Assistants</a></li>
				<li><a href="grademanager.php">Manage Grading Scheme</a></li>
				<li><a href="builder.php">Make Quiz</a></li>
    	      <li class="nav-header">Today's Date</li>
    	      <li>
    	      	<script>
	    	      	var d = new Date();
	    	      	var date = d.toString().substring(0,15);
	    	      	document.write(date);
    	      	</script>
    	       </li>
    	       <li class="nav-header">Current Time</li>
    	       <li id="clock"></li>
            </ul>
          </div>
        </div>

	<!-- Class Roster -->
	<div class="span9">
		<div class="hero-unit">
			<h3>Course Manager</h3>
			<table>
				<tr>
					<th class="span2 align-center roster-title">Course</th>
					<th class="span2 align-center roster-title">Schedule</th>
					<th class="span2 align-center roster-title">Location</th>
					<th class="span2 align-center roster-title">Info</th>
					<th class="span2 align-center roster-title">Delete</th>
				</tr>
				<tr>
					<td><?php include '../php/displayCourses.php';?></td>
				</tr>
			</table>
		</div>
		<div class="hero-unit">
			<h3>Add Course</h3>
			<form action="../php/insertCourses.php" method="post">
				<table id="courses">
					<tr>
						<th class="span3 align-center roster-title">Course</th>
						<th class="span3 align-center roster-title">Schedule</th>
						<th class="span3 align-center roster-title">Location</th>
					</tr>
					<tr>
							<td>
								<input type="text" name="course-num" placeholder="course number">
							</td>
							<td>
								<input type="text" name="course-sched" placeholder="schedule">
							</td>
							<td>
								<input type="text" name="course-loc" placeholder="location">
							</td>
					</tr>
				</table>
				<input type="submit" class="btn btn-primary" value="Submit">
			</form>
		</div>
	</div>	  
      </div>
    </div>
</body>
</html>
