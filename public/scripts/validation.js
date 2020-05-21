function isTheIdAndPassEmpty() {
	var name = document.loginForm.id.value;
	var password = document.loginForm.password.value;

	if (name == null || name == '') {
		alert("ID can't be blank");
		return false;
	}
	if (password == null || password == '') {
		alert("Password can't be blank");
		return false;
	} else if (password.length < 3) {
		alert('Password must be at least 3 characters long.');
		return false;
	}
}
