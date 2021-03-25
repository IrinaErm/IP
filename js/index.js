function openForm() {
	document.getElementById("popup").style.display = "block";
	document.getElementById("body").style.overflow = "hidden";
}

function closeForm() {
	document.getElementById("popup").style.display = "none";
	document.getElementById("body").style.overflow = "auto";
}