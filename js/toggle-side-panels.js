function hideSidePanels(){
	document.getElementById("d").style.visibility = "hidden";
	document.getElementById("a-with-c").style.visibility = "hidden";
}
function showSidePanels(){
	document.getElementById("d").style.visibility = "visible";
	document.getElementById("a-with-c").style.visibility = "visible";
}
function hideMainPanel(){
	document.getElementById("b").style.visibility = "hidden";
}
function showMainPanel(){
	document.getElementById("b").style.visibility = "visible";
}
function hideArrowPanel(){
	document.getElementsByClassName("arrow-container")[0].style.display = "none";
}
hideSidePanels();