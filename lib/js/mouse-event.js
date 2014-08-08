// window.onload = init;

// function init () {
// 	event.KeyCode == 
// }

function AppearLoginWindow() {
	var navigation = document.getElementById("normal-nav");
	var loginWindow = document.getElementById("login-nav");
	navigation.style.display = "none";
	loginWindow.style.display = "";
}

function AppearNavigation() {
	var navigation = document.getElementById("normal-nav");
	var loginWindow = document.getElementById("login-nav");
	navigation.style.display = "";
	loginWindow.style.display = "none";
}