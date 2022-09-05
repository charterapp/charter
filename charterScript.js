

function validateForm () {
    var name = document.getElementById("name");
    var pass = document.getElementById("password");
    var user = document.getElementById("username");
		if(name.value.length == 0 || pass.value.length == 0 || user.value.length == 0) {
			alert("Form must be filled out completely...");
			return false;
		}
}