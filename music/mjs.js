
function expand(el, string){
	var div = document.getElementById(string);
	if(div.style.display == "block"){
		div.style.display = "none";
		el.innerHTML = "+";
	}else{
		div.style.display = "block";
		el.innerHTML = "-";
	}
}

function play(el,string) {
	var i;
	var all = document.getElementsByClassName("player");
	for(i=0; i< all.length; i++){
		var elem = all[i];
		elem.style.display = "none";
	document.getElementById("nowplaying").style.background = 		"black";
		document.getElementById("nowplaying").innerHTML = 			"Play";
		elem.pause();
		elem.currentTime = 0;
		document.getElementById("nowplaying").id="";
	}

	var div = document.getElementById(string);
	if(div.style.display == "block"){
		div.style.display = "none";
		el.style.background = "black";
		el.innerHTML = "Play"
		div.pause();
		div.currentTime = 0;
	}else{
		div.style.display = "block";
		el.style.background = "#555";
		el.innerHTML = "Stop"
		el.id = "nowplaying";
		div.play();
	}
}

function home(){
	window.location.href = ".";
}