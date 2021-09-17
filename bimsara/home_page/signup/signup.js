
const form = document.getElementById('form');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
// const gender = document.getElementById('gender');
const mnumber = document.getElementById('mnumber');
// const dob = document.getElementById('dob');
const address = document.getElementById('address');
const inj = document.getElementById('inj');
const email = document.getElementById('email');
const username = document.getElementById('username');
const password1 = document.getElementById('password1');
const password2 = document.getElementById('password2');
// const trainer = document.getElementById('trainer');


password1.addEventListener('input', () => {

	clearTimeout(timeout);

	timeout = setTimeout(() => StrengthChecker(password1.value), 10000);
});

form.addEventListener('submit', e => {
	e.preventDefault();

	checkInputs();
});

function checkInputs() {

	// trim to remove the whitespaces

    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
	// const genderValue = gender.value.trim();
	const mnumberValue = mnumber.value.trim();
	// const dobValue = dob.value.trim();
	const addressValue = address.value.trim();
	const injValue = inj.value.trim();
	const emailValue = email.value.trim();
	const usernameValue = username.value.trim();
	const password1Value = password1.value.trim();
    const password2Value = password2.value.trim();
	// const trainerValue = trainer.value.trim();

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

	// if (genderValue === ' Gender ') {
	// 	setErrorFor(gender, 'Select a gender');
	// } else {
	// 	setSuccessFor(gender);
	// }

	if (addressValue === '') {
		setErrorFor(address, 'Address cannot be blank');
	} else {
		setSuccessFor(address);
	}
	
    if (injValue === '') {
		setErrorFor(inj, 'Injuries Field cannot be blank');
	} else {
		setSuccessFor(inj);
	}

	if (emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if (usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
	} else {
		setSuccessFor(username);
	}

	if (password1Value === '') {
		setErrorFor(password1, 'Password cannot be blank');
	} else {
		setSuccessFor(password1);
	}

    if (password2Value === '') {
		setErrorFor(password2, 'Confirm Password cannot be blank');
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords does not match');
	} else{
		setSuccessFor(password2);
	}

	// if (genderValue === ' Gender ') {
	// 	setErrorFor(gender, 'Select a gender');
	// } else {
	// 	setSuccessFor(gender);
	// }
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	if (input === inj){
		formControl.className = 'inj__div error';
		small.innerText = message;
	}else{
		formControl.className = 'form__div error';
		small.innerText = message;
	}
	
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	if (input === inj)
	{
		formControl.className = 'inj__div success';
	}else{
		formControl.className = 'form__div success';
	}
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isPassword(password){
	let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})')
	let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))')

	if(strongPassword.test(password1)) {
        const formControl = password1.parentElement;
		const small = formControl.querySelector('small');
		small.innerText = 'Strong Password';
		// small.innerText.textcolor ='green';
		small.style.display = 'visible';

    } else if(mediumPassword.test(password1)) {
        // strengthBadge.style.backgroundColor = 'blue';
        // strengthBadge.textContent = 'Medium';
    } else {
        // strengthBadge.style.backgroundColor = 'red';
        // strengthBadge.textContent = 'Weak';
    }
}