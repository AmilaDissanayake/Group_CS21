const form = document.getElementById('form');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const username = document.getElementById('username');
const email = document.getElementById('email');
// const gender = document.getElementById('gender');
const mnumber = document.getElementById('mnumber');
const address = document.getElementById('address');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
	e.preventDefault();

	checkInputs();
});

function checkInputs() {

	// trim to remove the whitespaces

    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
	const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
    // const genderValue = gender.value.trim();
    const mnumberValue = mnumber.value.trim();
    const addressValue = address.value.trim();
	const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

	if (fnameValue === '') {
		setErrorFor(fname, 'First name cannot be blank');
	} else {
		setSuccessFor(fname);
	}
    
    if (lnameValue === '') {
		setErrorFor(lname, 'Last name cannot be blank');
	} else {
		setSuccessFor(lname);
	}
    
    if (usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
	} else {
		setSuccessFor(username);
	}

	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}

    // if (genderValue === ' Gender ') {
	// 	setErrorFor(gender, 'Select a gender');
	// } else {
	// 	setSuccessFor(gender);
	// }

    if (mnumberValue === '') {
		setErrorFor(mnumber, 'Mobile No. cannot be blank');
	} else {
		setSuccessFor(mnumber);
	}

    if (addressValue === '') {
		setErrorFor(address, 'Address cannot be blank');
	} else {
		setSuccessFor(address);
	}

	if (passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
		setSuccessFor(password);
	}

    if(password2Value === '') {
		setErrorFor(password2, 'Confirm Password cannot be blank');
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords does not match');
	} else{
		setSuccessFor(password2);
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