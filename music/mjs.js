
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
	var div = document.getElementById(string);
	if(div.style.display == "block"){
		div.style.display = "none";
		el.style.background = "black";
		el.innerHTML = "Play"
		div.pause();
		div.currentTime = 0;
	}else{
	var i;
	var all = document.getElementsByClassName("player");
	for(i=0; i< all.length; i++){
		var elem = all[i];
		if(elem != div){
			elem.style.display = "none";
			if(document.getElementById("nowplaying") != null){
				document.getElementById("nowplaying").style.background = "black";
				document.getElementById("nowplaying").innerHTML = "Play";
				document.getElementById("nowplaying").id="";
			}
			elem.pause();
			elem.currentTime = 0;
		}
	}
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