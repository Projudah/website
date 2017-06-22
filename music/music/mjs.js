
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