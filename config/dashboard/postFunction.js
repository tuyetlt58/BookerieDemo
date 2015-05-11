function heart(postid) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			update_heart(postid);
		}
	}
	xmlhttp.open("GET","config/heart/heart.php?postid=" + postid,true);
	xmlhttp.send();

	var string = "#heart" + postid;
	$(string).toggleClass("btn-danger");
}

function update_heart(postid) {
	var e = document.getElementById("badge_heart" + postid);
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			if(xmlhttp.responseText != 0) {
				e.innerHTML = xmlhttp.responseText;
			} else {
				e.innerHTML = "";
			}
		}
	}
	xmlhttp.open("GET","config/dashboard/heart_index.php?postid=" + postid,true);
	xmlhttp.send();
}

function lineup(postid) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			update_lineup(postid);
		}
	}
	xmlhttp.open("GET","config/lineup/lineup.php?postid=" + postid,true);
	xmlhttp.send();

	var string = "#lineup" + postid;
	$(string).toggleClass("btn-warning");
}

function update_lineup(postid) {
	var e = document.getElementById("badge_lineup" + postid);
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			if(xmlhttp.responseText != 0) {
				e.innerHTML = xmlhttp.responseText;
			} else {
				e.innerHTML = "";
			}
		}
	}
	xmlhttp.open("GET","config/dashboard/lineup_index.php?postid=" + postid,true);
	xmlhttp.send();
}

function bookmark(postid) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","config/bookmark/bookmark.php?postid=" + postid,true);
	xmlhttp.send();
	
	var string = "#bookmark" + postid;
	$(string).toggleClass("btn-success");
}

function bump(postid) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			page = 1;
			sorting(str1,1);
		}
	}
	xmlhttp.open("GET","config/bump/bump.php?postid=" + postid,true);
	xmlhttp.send();	
}