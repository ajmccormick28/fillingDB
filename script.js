var lastBrick = ""

function brickClicked(brick)
{
	document.getElementById(brick).innerHTML = brick;
	if(lastBrick != ""){
		document.getElementById(lastBrick).innerHTML = "";
	}

	lastBrick = brick;
	console.log(lastBrick);
}