function email_sent() {
	document.getElementById('login').style.display = 'none';
	document.getElementById('login-blank').style.display = 'block';
}

// $(document).ready(function() {
//     $("#recover").onclick(function(e) {
//         $("#login").hide();
//         $("#login-blank").show();
//     });
// });

function startTime()
{
	var today=new Date();
	var h=today.getHours();
	var m=today.getMinutes();
	var s=today.getSeconds();
	// add a zero in front of numbers<10
	m=checkTime(m);
	s=checkTime(s);
	document.getElementById('clock').innerHTML=h+":"+m+":"+s;
	t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
	if (i<10)
	{
	  i="0" + i;
	}
	return i;
}

$("#levelselect").change(function() {
  var action = $(this).val() == "admin" ? "../php/insertProfessor.php" : "content";
  $("#input").attr("action", "/search/" + action);
});

    
function addCourse(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length-1;
      var row = table.insertRow(rowCount);

      var cell1 = row.insertCell(0);
      var element1 = document.createElement("input");
      element1.type = "text";
      element1.name="txtbox[]";
      element1.placeholder="course number";
      cell1.appendChild(element1);

      var cell2 = row.insertCell(1);
      var element2 = document.createElement("input");
      element2.type = "text";
      element2.name="txtbox[]";
      element2.placeholder="schedule";
      cell2.appendChild(element2);

      var cell3 = row.insertCell(2);
      var element3 = document.createElement("input");
      element3.type = "text";
      element3.name = "txtbox[]";
      element3.placeholder="location";
      cell3.appendChild(element3);

      var cell4 = row.insertCell(3);
      var element4 = document.createElement("input");
      element4.type = "text";
      element4.name = "txtbox[]";
      element4.placeholder="password";
      cell4.appendChild(element4);

}

function addStudent(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length-1;
      var row = table.insertRow(rowCount);

      var cell1 = row.insertCell(0);
      var element1 = document.createElement("input");
      element1.type = "text";
      element1.name="txtbox[]";
      element1.placeholder="student name";
      cell1.appendChild(element1);

      var cell2 = row.insertCell(1);
      var element2 = document.createElement("input");
      element2.type = "text";
      element2.name="txtbox[]";
      element2.placeholder="student email";
      cell2.appendChild(element2);

      var cell3 = row.insertCell(2);
      var options = '<select><option value="CSE 134B">CSE 134B</option><option value="CSE 135">CSE 135</option><option value="CSE 136">CSE 136</option></select>'
      cell3.innerHTML = options;

      var cell4 = row.insertCell(3);
      var options = '<select><option value="A+">A+</option><option value="A">A</option><option value="A-">A-</option><option value="B+">B+</option><option value="B">B</option><option value="B-">B-</option> <option value="C+">C+</option><option value="C">C</option><option value="C-">C-</option><option value="D">D</option><option value="F">F</option><option value="N/A">N/A</option></select>';
      cell4.innerHTML = options;

}

function addTA(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var cell1 = row.insertCell(0);
      var element1 = document.createElement("input");
      element1.type = "text";
      element1.name="txtbox[]";
      element1.placeholder="TA name";
      cell1.appendChild(element1);

      var cell2 = row.insertCell(1);
      var element2 = document.createElement("input");
      element2.type = "text";
      element2.name="txtbox[]";
      element2.placeholder="TA email";
      cell2.appendChild(element2);

      var cell3 = row.insertCell(2);
      var options = '<select><option value="CSE 134B">CSE 134B</option><option value="CSE 135">CSE 135</option><option value="CSE 136">CSE 136</option></select>'
      cell3.innerHTML = options;

}

function alertFunction()
{
	var x;
	var r=confirm("Are you sure you want to begin? The timer will countdown from 50 minutes!");
	if (r==true)
	{
		window.location.href = "./studentTakeQuiz.html";
	}
	else
	{
	}
}
