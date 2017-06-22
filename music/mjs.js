
function expand(el, string){
	var div = document.getElementById(string);
	if(div.style.display == "none"){
	div.style.display = "block";
	el.innerHTML = "-"
}else{
	div.style.display = "none";
	el.innerHTML = "+"
}
}