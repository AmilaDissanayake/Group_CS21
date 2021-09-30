const form = document.getElementById('form');
const username = document.getElementById('username');
// const email = document.getElementById('email');
const password = document.getElementById('password');
// var usernameErr = passwordErr = true;
var isValid;

form.addEventListener("submit", function(e) {
	checkInputs();
	if(!isValid){
		e.preventDefault();
	}	
	// return true;

});

// window.onload = function () {
// 	form.onsubmit = function onSubmit(form){
// 		var isValid = true;
// 		checkInputs();

// 		if(!isValid){
// 			return false;
// 		}else{
// 			return true;
// 		}
// 	}
// }

function checkInputs() {

	// trim to remove the whitespaces

	const usernameValue = username.value.trim();
	// const emailValue = email.value.trim();
	const passwordValue = password.value.trim();

	if (usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
		isValid = false;
		// usernameErr = false;

	} else {
		setSuccessFor(username);
		isValid = true;
	}

	// if(emailValue === '') {
	// 	setErrorFor(email, 'Email cannot be blank');
	// } else if (!isEmail(emailValue)) {
	// 	setErrorFor(email, 'Not a valid email');
	// } else {
	// 	setSuccessFor(email);
	// }

	if (passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
		isValid = false;
		// passwordErr = false;
	} else {
		setSuccessFor(password);
		isValid = true;
	}

	// if ((usernameErr || passwordErr) == true) {
	// 	return false;
	// }

	// else {
	// 	return true;
	// }
}




function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form__div error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form__div success';
}




