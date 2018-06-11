var beepOne = $("#beep-one")[0];
$("#rimshot-hover-sound")
	.mouseenter(function() {
		beepOne.play();
	});

var rimShotAudio = document.getElementById("beep-one"); 

function playRim() { 
    rimShotAudio.play(); 
} 
item.addEventListener('mouseover', rimShotAudio.playRim, false);