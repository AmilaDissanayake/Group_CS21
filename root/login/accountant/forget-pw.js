
const form = document.getElementById('form');
const email = document.getElementById('email');


var isValid;
form.addEventListener("submit", function(e) {
	checkInputs();

	if(!isValid){
		e.preventDefault();
	}	

});


function checkInputs() {

	// trim to remove the whitespaces

	const emailValue = email.value.trim();


	if (emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
		isValid = false;
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
		isValid = false;
	} else {
		setSuccessFor(email);
		isValid = true;
	}

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


function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
