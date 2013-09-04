function hide_pledge() {
	document.getElementById("pledge-header").style.display = "none";
	document.getElementById("pledge").style.display = "none";
	document.getElementById("like").style.display = "none";
}

function show_pledge() {
	document.getElementById("pledge-header").style.display = "block";
	document.getElementById("pledge").style.display = "block";
	document.getElementById("like").style.display = "block";
}

function hide_profiles() {
	document.getElementById("profile-header").style.display = "none";
	var profiles = document.getElementsByClassName("profile");
	for (var i = 0; i < profiles.length; ++i) {
		profiles[i].style.display = "none";
	}
	var actions = document.getElementsByClassName("action");
	for (var i = 0; i < actions.length; ++i) {
		actions[i].style.display = "none";
	}
	var pics = document.getElementsByClassName("picture");
	for (var i = 0; i < pics.length; ++i) {
		pics[i].style.display = "none";
	}
}

function showDivById(id) {
	hide_profiles();
	hide_pledge();
	document.getElementById("profile-header").style.display = "block";
	document.getElementById(id).style.display = "block";
	document.getElementById(id+"-action").style.display = "block";
	document.getElementById(id+"-pic").style.display = "block";
}

var like_count = 0;
function like_counter() {
	return ++like_count;
}