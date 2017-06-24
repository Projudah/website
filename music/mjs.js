
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
		div.style.display = "block";
		el.style.background = "#555";
		el.innerHTML = "Stop"
		div.play();
	}
}

function home(){
	window.location.href = ".";
}