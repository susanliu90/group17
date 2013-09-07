<!DOCTYPE html>
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
	<script src="../js/dropdown.js"></script>

	<script type="text/javascript">
	
		Shadowbox.init({
			handleOversize: "drag",
			modal: true
		});
		
	</script>

</head>
<body>
	<!--Right Sidescroll Bar-->
	<div id="sidescroll" class="sidescrollclass">
		<div id="sidescroll-title">
			<h4 style="font-size:10px;color: white;margin: 10px;text-align: center;">Quiz Navigator</h4>
		</div>
		<p style="color:white;"><input class= "ListingOption" onclick="hideMe2(this);" type="checkbox"> List Question </p>
		<ul id="page1" class="rightscroll ui-sortable" style="list-style:none"> Page 1 <li class='rightqlist' draggable='true' id="smytab-1">Section 1</li> </ul>
		<ul id="page2" class="rightscroll ui-sortable" style="list-style:none"> Page 2 </ul>
		<ul id="page3" class="rightscroll ui-sortable" style="list-style:none"> Page 3 </ul>
		<ul id="page4" class="rightscroll ui-sortable" style="list-style:none"> Page 4 </ul>
		<ul id="page5" class="rightscroll ui-sortable" style="list-style:none"> Page 5 </ul>
	</div>
	
	<!-- Navigation bar on the top -->
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">     
          <a class="brand" href="homepage.html" tabindex=3><img src="../img/logo1.png"></a>
          <div class="nav-collapse collapse pull-right"> <!-- put in pull-right -->
            <p class="navbar-text"> <!-- took out pull-right -->
            	<!-- <strong><a class="level-margin" href="../html/coursemanager.html">ADMINISTRATOR</a></strong> -->
            	
            	<div class="btn-group">
				  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
				    ADMINISTRATOR
				    <span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu">
				    <!-- dropdown menu links -->
				        <li><a tabindex="-1" href="coursemanager.php">Manage Courses</a></li>
					    <li><a tabindex="-1" href="addstudents.php">Manage Students</a></li>
					    <li><a tabindex="-1" href="addtas.php">Manage Teaching Assistants</a></li>
					    <li><a tabindex="-1" href="grademanager.php">Manage Grading Schemes</a></li>
					    <li class="divider"></li>
					    <li><a tabindex="-1" href="../homepage.html">Logout</a></li>
				  </ul>
				</div>
				<!-- List of quiz options -->
				<input id='randomize-ans' class= "icon-randomize" title="This feature allows you to randomize all answer choices each time the test is administered." onclick="randomAns()" type="image" src="../img/randomizeA.png" alt="Randomize Quiz" >
				<input id='sort-by-type' class= "icon-sort-by-type" title="Sort all the questions by their respective question type."  onclick="sortByColor()" type="image"  src="../img/sortbytype.png" alt="Sort By Type" >
				<input id='page-editor' class= "icon-randomize" title="Edit how your sections or questions look on pages." onclick="hideMe3()" type="image" src="../img/addPage.png" alt="Page Editor">
				<input id="restart-quiz" class="icon-restart" title= "Refresh entire quiz" onclick="alert('Are you sure you want to refresh? You will lose all changes made'); document.location.reload(true);" type="image" src="../img/restart.png" alt="Refresh Quiz" src="../img/addSection.png" >
				<input id="prev-quiz" class="icon-preview" title= "Preview Your Quiz before you save it!"  type="image" src = "../img/preview.png" alt="PreviewQuiz" href="#quizpreview" onclick="previewPage()" data-toggle="modal">
				<a href="#"><img class="icon-save" id="saveq"  title= "Finish and Save!" onclick="createString()" type="image" src="../img/save.png" alt="SaveQuiz" href="#responsive" data-toggle="modal"></a>
				<a href="../img/logo3.png" rel="shadowbox[helpMechanism];minHeight=300;minWidth=300" title="Need assistance on navigating the site? Click here!" class="navbar-link">Help</a> 
				<!--<a href="../homepage.html" title="Click here to log out of your account" class="navbar-link">Logout</a>-->
            </p>
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
            <li class="nav-header">Quiz Details 
             	<p title="The total amount of points currently.">Total Points: <span class="badge" id='point_here'></span></p>
             	<p title="This is the total number of question on the quiz.">Question Count: <span class="badge" id='num_quest_here'></span></p>
				<p title="The quiz is set to be timed for the following time"> <b id='time_here'></b> </p>
             </li>
			 <!-- For adding quiz questions -->
             <li class="nav-header">Add Question</li>
             <li id="addQList" title = "Click or drag question type below to add question">
				<div class="addq" id="qtype1" style="margin:0 10px 0 10px" draggable="true" ondragstart="drag(event)" onmouseover=""onclick="addQuestion('plus1')">
					<img class="icon-plus" id="plus1" src="../img/q-mc-single.png" alt="Add"> Multiple Choice (Single)<span class="badge" id="mcs_badge_here"></span></div>
				<div class="addq" id="qtype2" style="margin:0 10px 0 10px" draggable="true" ondragstart="drag(event)" onclick="addQuestion('plus2')">
					<img class="icon-plus" id="plus2" src="../img/q-mc-multiple.png" alt="Add"> Multiple Choice (Multiple)<span class="badge" id="mcm_badge_here"></span></div>
				<div class="addq" id="qtype3" style="margin:0 10px 0 10px" draggable="true" ondragstart="drag(event)" onclick="addQuestion('plus3')">
					<img class="icon-plus" id="plus3" src="../img/q-tf.png" alt="Add"> True/False<span class="badge" id="tf_badge_here"></span></div>
				<div class="addq" id="qtype4" style="margin:0 10px 0 10px" draggable="true" ondragstart="drag(event)" onclick="addQuestion('plus4')">
					<img class="icon-plus" id="plus4" src="../img/q-fi.png" alt="Add"> Fill-in the Blank<span class="badge" id="fi_badge_here"></span></div>
				<div class="addq" id="qtype5" style="margin:0 10px 0 10px" draggable="true" ondragstart="drag(event)" onclick="addQuestion('plus5')">
					<img class="icon-plus" id="plus5" src="../img/q-sa.png" alt="Add"> Simple Answer<span class="badge" id="sa_badge_here"></span></div>
				<div class="addq" id="qtype6" style="margin:0 10px 0 10px" draggable="true" ondragstart="drag(event)" onclick="addQuestion('plus6')">
					<img class="icon-plus" id="plus6" src="../img/q-se.png" alt="Add"> Short Essay<span class="badge" id="se_badge_here"></span></div>
				<br>
				<p id="draghere" style="margin:0 20px 0 20px" ondrop="drop(event)" ondragover="allowDrop(event)"> Drag here to add question!</p>
				<br>
            	 </li>
             <li class="nav-header">Features</li>
             <li title="Add a Timer to your Quiz by filling out the fields and pressing confirm">
              	<img class="icon-timer" id="timer" src="../img/clock.png" alt="AddTimer"style="margin:0 10px 0 10px"> <b id='time_here'></b> 
				<input type="text" id = "timerhour" size= "2" value="hour"> :
				<input type="text" id = "timermin" size= "2" value="min"> 
				<input class="icon-timer" type="image" src="../img/confirm.png" alt="confirm" onclick="displayResult(this.parentNode.children[2].value, this.parentNode.children[3].value)">
			</li>
             </ul>
          </div>
        </div>

	<!-- Quiz container that store all 6 types of quiz questions -->
	<div id="container" style="width:1000px; margin:0 auto;">
		<div>			
			<div id="question_container">
			
			<h2 id = "quiz_name" class="editable" onmouseover="hovericon(this)" onmouseout="normalimg(this)" onclick="edit(this)">Click to insert your quiz name here...</h2>		
			<!-- Quiz tab, each quiz can be divided into desired tab -->
			<div id="tabs">
	 			 <ul class= "tabNav">
		    		 <li class="tabTop" id="mytab-1"><a href="#tabs-1" ondblclick="edit(this)">Section 1</a></li>
					 <input id='add-tab' class= "icon-section" title= "Add Section" type="image"  src="../img/addSection.png"  alt="Add Section" >
	  			</ul>
	  			<div id="tabs-1">
					<ol class="question_list connectedSortable ui-helper-reset">

					</ol>
				</div>
			</div>	
		</div>
	</div>	
		<!-- The 6 types of question, these are cloned in javascript to be added to the tab -->
		<ol id="mainquestlist" style="list-style:none">
		<li>
			<div id="mc1" class="question multChoiceSingle" draggable="true" >
				<p style="float:right;margin:0 2px 0 0"><img class="icon-delete" onclick="closeMe(this.parentNode.parentNode.parentNode)" src="../img/delete.png" alt="delete"></p>
				<p style="float:right;margin:0 2px 0 0"><img class="icon-minus" onclick="minimizeMe(this.parentNode.parentNode.children[4].id)" src="../img/minimize.png" alt="minimize"></p>
				<p style="float:left;margin:0 2px 0 0"><img class="icon-q" src="../img/q-mc-single.png" alt="mc-single-icon"></p>
				<div class="editable" onmouseover="hovericon(this)" onmouseout="normalimg(this)" onclick="edit(this)">Click to insert question here...</div>
				<div class="widget-content">
					<p class="pslide">Check only 1 answer below:</p>
					<ul class="ui-sortable" style="list-style:none;">
						<li draggable="true"><input type="radio" name="question1" class="check"> <input class = "mca" onfocus="editAnswer(this)" type="text" size= "50" value="Add your answer here..."> <img class="icon-sort" src="../img/drag_icon.png">
							<img class="icon-delete" onclick="closeMe(this.parentNode)" src="../img/delete.png" alt="delete"></li>
						<li draggable="true"><input type="radio" name="question1" class="check"> <input class = "mca" onfocus="editAnswer(this)" type="text" size= "50" value="Add your answer here..."> <img class="icon-sort" src="../img/drag_icon.png">
							<img class="icon-delete" onclick="closeMe(this.parentNode)" src="../img/delete.png" alt="delete"></li>
						<li draggable="true"><input type="radio" name="question1" class="check"> <input class = "mca" onfocus="editAnswer(this)" type="text" size= "50" value="Add your answer here..."> <img class="icon-sort" src="../img/drag_icon.png">
							<img class="icon-delete" onclick="closeMe(this.parentNode)" src="../img/delete.png" alt="delete"></li>
						<li draggable="true"><input type="radio" name="question1" class="check"> <input class = "mca" onfocus="editAnswer(this)" type="text" size= "50" value="Add your answer here..."> <img class="icon-sort" src="../img/drag_icon.png">
							<img class="icon-delete" onclick="closeMe(this.parentNode)" src="../img/delete.png" alt="delete"></li>
					</ul>
					<p>Add additional answer choice <b class="here_button" value="Insert" style="color:#009966;" onmouseover="hovericon(this)" onmouseout="normalimg(this)" 
						onclick="addToList(this.parentNode.parentNode.children[1].id, 'singleans');"> HERE </b></p>
					<p class="pointsp">Points Possible: <input class= "pValue" type="text" size= "6" value=0 onfocus="editAnswer(this)">
					</p>
				</div>
			</div>
		</li>			
		<li>
			<div id="mc2" class="question multChoiceMult" draggable="true">
				<p style="float:right;margin:0 2px 0 0"><img class="icon-delete" onclick="closeMe(this.parentNode.parentNode.parentNode)" src="../img/delete.png" alt="delete"></p>
				<p style="float:right;margin:0 2px 0 0"><img class="icon-minus" onclick="minimizeMe(this.parentNode.parentNode.children[4].id)" src="../img/minimize.png" alt="minimize"></p>
				<p style="float:left;margin:0 2px 0 0"><img class="icon-q" src="../img/q-mc-multiple.png" alt="mc-multiple-icon"></p>
				<div class="editable" onmouseover="hovericon(this)" onmouseout="normalimg(this)" onclick="edit(this)">Click to insert question here...</div>
				<div class="widget-content">
				<p class="pslide">Check 1 or more answer below:</p>

				<ul class="ui-sortable" style="list-style:none;">
				<li draggable="true"><input type="checkbox" name="question2" class="check"> <input class = "mca" onfocus="editAnswer(this)" type="text" size= "50" value="Add your answer here..."> <img class="icon-sort" src="../img/drag_icon.png">
					<img class="icon-delete" onclick="closeMe(this.parentNode)" src="../img/delete.png" alt="delete"></li>
				<li draggable="true"><input type="checkbox" name="question2" class="check"> <input class = "mca" onfocus="editAnswer(this)" type="text" size= "50" value="Add your answer here..."> <img class="icon-sort" src="../img/drag_icon.png">
					<img class="icon-delete" onclick="closeMe(this.parentNode)" src="../img/delete.png" alt="delete"></li>
				<li draggable="true"><input type="checkbox" name="question2" class="check"> <input class = "mca" onfocus="editAnswer(this)" type="text" size= "50" value="Add your answer here..."> <img class="icon-sort" src="../img/drag_icon.png">
					<img class="icon-delete" onclick="closeMe(this.parentNode)" src="../img/delete.png" alt="delete"></li>
				<li draggable="true"><input type="checkbox" name="question2" class="check"> <input class = "mca" onfocus="editAnswer(this)" type="text" size= "50" value="Add your answer here..."> <img class="icon-sort" src="../img/drag_icon.png">
					<img class="icon-delete" onclick="closeMe(this.parentNode)" src="../img/delete.png" alt="delete"></li>
				</ul>
				<p>Add additional answer choice <b class="here_button" value="Insert" style="color:#009966;" onmouseover="hovericon(this)" onmouseout="normalimg(this)" 
					onclick="addToList(this.parentNode.parentNode.children[1].id, 'multians');"> HERE </b></p>
				<p class="pointsp">Points Possible: <input class= "pValue" type="text" size= "6" value=0 onfocus="editAnswer(this)" >
				</p>
				</div>
			</div>
			</li>
			
			<li>
			<div id="tf" class="question trueFalse" draggable="true">
				<p style="float:right;margin:0 2px 0 0"><img class="icon-delete" onclick="closeMe(this.parentNode.parentNode.parentNode)" src="../img/delete.png" alt="delete"></p>
				<p style="float:right;margin:0 2px 0 0"><img class="icon-minus" onclick="minimizeMe(this.parentNode.parentNode.children[4].id)" src="../img/minimize.png" alt="minimize"></p>
				<p style="float:left;margin:0 2px 0 0"><img class="icon-q" src="../img/q-tf.png" alt="tf-icon"></p>
				<div class="editable" onmouseover="hovericon(this)" onmouseout="normalimg(this)" onclick="edit(this)">Click to insert question here...</div>
				<div class="widget-content">
				<p class="pslide">Please check either true or false below:</p>
				<ul class="ui-sortable" style="list-style:none;">
				<li draggable="true"><input class = "mca check" type="radio" name="question3" value="True">True</li>
				<li draggable="true"><input class = "mca check" type="radio" name="question3" value="False">False</li>
				</ul>
				<p class="pointsp">Points Possible: <input class= "pValue" type="text"  size= "6" value=0 onfocus="editAnswer(this)" >
				</p>
				</div>
			</div>
			</li>
			
			<li>
			<div id="fi" class="question fillIn" draggable="true" >
				<p style="float:right;margin:0 2px 0 0"><img class="icon-delete" onclick="closeMe(this.parentNode.parentNode.parentNode)" src="../img/delete.png" alt="delete"></p>
				<p style="float:right;margin:0 2px 0 0"><img class="icon-minus" onclick="minimizeMe(this.parentNode.parentNode.children[4].id)" src="../img/minimize.png" alt="minimize"></p>
				<p style="float:left;margin:0 2px 0 0"><img class="icon-q" src="../img/q-fi.png" alt="fi-icon"></p>
				<div class="editable" onmouseover="hovericon(this)" onmouseout="normalimg(this)" onclick="edit(this)">Click to insert question here...</div>
				<div class="widget-content">

					<p class="pslide"><input class = "mca" onfocus="editAnswer(this)" type="text" id = "q4-0" size= "16" title="Enter the first part of the fill-in " value="Add text here">
					_________________<input class = "mca" onfocus="editAnswer(this)" type="text" id = "q4-1" size= "16" title="Enter the second part of the fill-in" value="Add text here"></p>
					<div class="divsort3">
					<ul class="ui-sortable" style="list-style:none;">					
						<li draggable="true">Possible answer: <input class = "mca" onfocus="editAnswer(this)" type="text" id = "q4-2" size= "16"><img class="icon-sort" src="../img/drag_icon.png">
							<img class="icon-delete" onclick="closeMe(this.parentNode)" src="../img/delete.png" alt="delete"></li>
						<li draggable="true">Possible answer: <input class = "mca" onfocus="editAnswer(this)" type="text" id = "q4-3" size= "16"><img class="icon-sort" src="../img/drag_icon.png">
							<img class="icon-delete" onclick="closeMe(this.parentNode)" src="../img/delete.png" alt="delete"></li>
					</ul>
					<p>Add additional answer text box <b class="here_button" value="Insert" style="color:#009966;" onmouseover="hovericon(this)" onmouseout="normalimg(this)"
						onclick="addToList(this.parentNode.parentNode.children[0].id, 'fians');"> HERE </b></p></div>
					<p><input class= "manualGrade" onclick="hideMe($(this.parentNode.parentNode.children[1]), this);" type="checkbox"> Manually Grade this Question</p>
					<p class="pointsp">Points Possible: <input class= "pValue" type="text" size= "6" value=0 onfocus="editAnswer(this)">
					</p>
				</div>
			</div>
			</li>
			
			<li>
			<div id="sa" class="question shortAnswer" draggable="true" >
				<p style="float:right;margin:0 2px 0 0"><img class="icon-delete" onclick="closeMe(this.parentNode.parentNode.parentNode)" src="../img/delete.png" alt="delete"></p>
				<p style="float:right;margin:0 2px 0 0"><img class="icon-minus" onclick="minimizeMe(this.parentNode.parentNode.children[4].id)" src="../img/minimize.png" alt="minimize"></p>
				<p style="float:left;margin:0 2px 0 0"><img class="icon-q" src="../img/q-sa.png" alt="sa-icon"></p>
				<div class="editable" onmouseover="hovericon(this)" onmouseout="normalimg(this)" onclick="edit(this)">Click to insert question here...</div>
				<div class="widget-content">

					<p class="pslide"><input type="text" id = "q5-0" size= "16" title="Enter the text before the fill-in " class = "mca" value="Add text here">_________________.</p>
					<div class="divsort3">
					<ul class="ui-sortable" style="list-style:none;">					
						<li draggable="true">Possible answer: <input class = "mca" onfocus="editAnswer(this)" type="text" id = "q4-2" size= "16"><img class="icon-sort" src="../img/drag_icon.png">
							<img class="icon-delete" onclick="closeMe(this.parentNode)" src="../img/delete.png" alt="delete"></li>
						<li draggable="true">Possible answer: <input class = "mca" onfocus="editAnswer(this)" type="text" id = "q4-3" size= "16"><img class="icon-sort" src="../img/drag_icon.png">
							<img class="icon-delete" onclick="closeMe(this.parentNode)" src="../img/delete.png" alt="delete"></li>

					</ul>
					<p>Add additional answer text box <b class="here_button" value="Insert" style="color:#009966;" onmouseover="hovericon(this)" onmouseout="normalimg(this)"
						onclick="addToList(this.parentNode.parentNode.children[0].id, 'fians');"> HERE </b></p></div>
						<p><input class= "manualGrade" onclick="hideMe($(this.parentNode.parentNode.children[1]), this);" type="checkbox" name="mg"> Manually Grade this Question</p>

					<p class="pointsp">Points Possible: <input class= "pValue" type="text"  size= "6" value=0 onfocus="editAnswer(this)">
					</p>
				</div>
			</div>			
			</li>
			
			<li>
			<div id="se" class="question shortEssay" draggable="true" >
				<p style="float:right;margin:0 2px 0 0"><img class="icon-delete" onclick="closeMe(this.parentNode.parentNode.parentNode)" src="../img/delete.png" alt="delete"></p>
				<p style="float:right;margin:0 2px 0 0"><img class="icon-minus" onclick="minimizeMe(this.parentNode.parentNode.children[4].id)" src="../img/minimize.png" alt="minimize"></p>
				<p style="float:left;margin:0 2px 0 0"><img class="icon-q" src="../img/q-se.png" alt="se-icon"></p>
				<div class="editable" onmouseover="hovericon(this)" onmouseout="normalimg(this)" onclick="edit(this)">Click to insert question here...</div>
				<div class="widget-content">
					<ul style="list-style:none;">
						<li>
							<p style="margin: 0 0 2px 2px;">Insert answer in text box below:</p>
							<textarea class = "mca" rows="8" cols="40"></textarea>
						</li>		
					</ul>
					<p><input class= "manualGrade" onclick="hideMe($(this.parentNode.parentNode.children[0]), this);" type="checkbox" name="fi"> Manually Grade this Question</p>
					<p class="pointsp">Points Possible: <input class= "pValue" type="text"  size= "6" value=0 onfocus="editAnswer(this)">
					</p>
				</div>
			</div>
			</li>				
			</ol>
			<!-- Help utility feature that pop up when the first question is added to the quiz -->
			<a id="dontForget" href="#" title="Don't forget to press ------- to modify questions!"></a>
			<img id="modifyPop" src="../img/minimize.png" alt="modify"> <!-- Handsome owl pops up -->
			<img id="owl" src="../img/quizzy.png" alt="hoot">
			
			<div id="responsive" class="modal hide fade" tabindex="-1" data-width="760">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			<a href="../img/logo3.png" rel="shadowbox[helpMechanism];minHeight=300;minWidth=300" class="save-link" style="color:black;">Help</a>
			</button>	
			<h3>Responsive</h3>
			</div>
			<div class="modal-body">
			<div id="quizPreviewBaby"></div>
			</div>
			<div class="modal-footer">
			<button type="button" data-dismiss="modal" class="btn" onclick="document.getElementById('quizPreviewBaby').textContent='';">Close</button>
			<button type="button" data-dismiss="modal" class="btn btn-primary">Ok</button>
			</div>
			</div>
			
			<div id="quizpreview" class="modal hide fade" tabindex="-1" data-width="880">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			<a href="../img/logo3.png" rel="shadowbox[helpMechanism];minHeight=300;minWidth=300" class="preview-link" style="color:black;">Help</a>
			</button>
			<h3>Quiz Preview</h3>
			</div>
			<div id="modal-id" class="modal-body">
			<p id="pquizname">Quiz Name: </p>
			<p id="pquizpoints">Total Points: ____/ 0</p>
			<p id="pquiztimelimit">You have 0:0 hour(s) left for this quiz</p>
			<p>Questions per Page:</p>
			<select id="qPerPage" title="Select the number of questions you want to present per webpage.">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option selected="selected">5</option>
			</select>
			<ul id="pquestionlist" class="pquestionclass" style="list-style:none;"></ul>
			</div>
			<div class="alt_page_navigation"><a class="first_link no_more" href="">First</a><a class="previous_link no_more" href="">Prev</a>
				<a class="page_link first active_page" href="" longdesc="0" style="display: block;">1</a>
				<a class="page_link" href="" longdesc="1" style="display: block;">2</a><a class="page_link " href="" longdesc="2" style="display: block;">3</a>
				<a class="page_link  last" href="" longdesc="3" style="display: block;">4</a><span class="ellipse more" style="display: none;"></span><a class="next_link" href="">Next</a>
				<a class="last_link" href="">Last</a></div>
			<div class="modal-footer">
			<button type="button" data-dismiss="modal" class="btn btn-primary" onclick="deleteAllQuestions()">Ok</button>
			</div>
			</div>
</body>
</html>
