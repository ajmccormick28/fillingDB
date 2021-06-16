var lastBrick = ""
var brickGroupA = document.getElementById("ba").contentDocument;

function searchNameClicked(brick)
{
	console.log('in here');
	brickGroupA.getElementById("c003").innerHTML = "Hello";
	//document.getElementById(brick).innerHTML = brick;
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
	let variables = "groupName=" + brick[0] + "&brickNumber=" + brick[1] + brick[2] + brick[3];
	console.log(variables);
	xmlhttp.open("GET", "searchDB.php?" + variables, true);
	xmlhttp.send();
}

function brickClicked(brick)
{
	console.log(brick);
	//document.getElementById(brick).innerHTML = brick;
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
	let variables = "groupName=" + brick[0] + "&brickNumber=" + brick[1] + brick[2] + brick[3];
	console.log(variables);
	xmlhttp.open("GET", "searchDB.php?" + variables, true);
	xmlhttp.send();
}

function filter(str) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
		document.getElementById("tem").innerHTML = this.responseText;
	  }
	};
	xhttp.open("GET", "searchBar.php?q="+str, true);
	xhttp.send();
	document.getElementById("tem").innerHTML = "got here";
  
  }
  
  function searchBar(str) {
  
	if (str.length == 0) {
	  document.getElementById("tem2").innerHTML = "";
	  return;
	} else {
	  var xmlhttp = new XMLHttpRequest();
	  xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		  document.getElementById("tem2").innerHTML = this.responseText;
		}
	  };
  
	  let variables = "input=" + str + "&filter=" + document.getElementById("searchFilter").value;
	  console.log(variables);
	  xmlhttp.open("GET", "searchBar.php?" + variables, true);
	  xmlhttp.send();
	}
  }