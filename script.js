var lastBrick = ""

function brickClicked(brick)
{
	document.getElementById(brick).innerHTML = brick;
	if(lastBrick != ""){
		document.getElementById(lastBrick).innerHTML = "";
	}

	var xmlhttp = new XMLHttpRequest();

	// This Receiving Data back from PHP
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById(brick).innerHTML = this.responseText;
		}
	};

	
	lastBrick = brick;
	console.log(lastBrick);
	

	//Sending data to the PHP file
	//let variables = "input=" + str + "&filter=" + document.getElementById("searchFilter").value;
	//console.log(variables);
	xmlhttp.open("GET", "searchDB.php?" + variables, true);
	xmlhttp.send();
}
