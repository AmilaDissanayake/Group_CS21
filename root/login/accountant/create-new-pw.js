
const form = document.getElementById('form');

const password1 = document.getElementById('password1');
const password2 = document.getElementById('password2');





var isValid;

form.addEventListener("submit", function(e) {
	checkInputs();
	if(!isValid){
		e.preventDefault();
	}	


});

function checkInputs() {

	// trim to remove the whitespaces


	const password1Value = password1.value.trim();
	const password2Value = password2.value.trim();


	if (password1Value === '') {
		setErrorFor(password1, 'Password cannot be blank');
		isValid = false;
	} else if (!pwlength(password1Value)) {
		setErrorFor(password1, 'Too short!Need at least 8');
		isValid = false;
	} else if (!pwlength4(password1Value)) {
		setErrorFor(password1, 'Uppercase Letters must be included');
		isValid = false;
	} else if (!pwlength3(password1Value)) {
		setErrorFor(password1, 'Lowercase Letters must be included');
		isValid = false;
	} else if (!pwlength2(password1Value)) {
		setErrorFor(password1, 'Numbers must be included');
		isValid = false;
	} else if (!pwlength1(password1Value)) {
		setErrorFor(password1, 'Symbols must be included');
		isValid = false;
	} else {
		setSuccessFor(password1);
		isValid = true;
	}

	if (password2Value === '') {
		setErrorFor(password2, 'Confirm Password cannot be blank');
		isValid = false;
	} else if (password2Value !== password1Value) {
		setErrorFor(password2, 'Re-Entered Password is wrong');
		isValid = false;
	}else if (!pwlength(password2Value)) {
		setErrorFor(password2, 'Selected Password is not Strong enough');
		isValid = false;	
	}else {
		setSuccessFor(password2);
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



function pwlength(password) {
	let validp = new RegExp('(?=.{8,})')
	if (validp.test(password)) {
		return true;
	}
	return false;
}

function pwlength1(password1) {
	let validp = new RegExp('(?=.*\\W)')
	if (validp.test(password1)) {
		return true;
	}
	return false;
}

function pwlength2(password1) {
	let validp = new RegExp('(?=.*[0-9])')
	if (validp.test(password1)) {
		return true;
	}
	return false;
}

function pwlength3(password1) {
	let validp = new RegExp('(?=.*[a-z])')
	if (validp.test(password1)) {
		return true;
	}
	return false;
}

function pwlength4(password1) {
	let validp = new RegExp('(?=.*[A-Z])')
	if (validp.test(password1)) {
		return true;
	}
	return false;
}
// function isPassword(password){
// 	let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})')
// 	let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))')

// 	const formCon = password1.parentElement;
// 	const small = formCon.querySelector('small');

// 	if(strongPassword.test(password1)) {
// 		small.innerText = 'Strong Password';
// 		small.style.textcolor ='green';
// 		small.style.display = 'visible';

//     } else if(mediumPassword.test(password1)) {
// 		small.innerText = 'Medium Password';
// 		small.style.textcolor ='blue';
// 		small.style.display = 'visible';
//     } else {
// 		small.innerText = 'Weak Password';
// 		small.style.textcolor ='read';
// 		small.style.display = 'visible';
//     }
// }

function passwordChanged() {

	const formControl = password1.parentElement;
	const small = formControl.querySelector('small');

	var pwd = document.getElementById("password1");

	var verystrongRegex = new RegExp("^(?=.{14,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
	var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
	var mediumRegex = new RegExp("^(?=.{8,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
	var enoughRegex = new RegExp("(?=.{8,}).*", "g");


	if (pwd.value.length == 0) {
		small.innerHTML = 'Type Password';
	} else if (false == enoughRegex.test(pwd.value)) {
		small.innerHTML = 'More Characters';
	} else if (verystrongRegex.test(pwd.value)) {
		small.innerHTML = '<span style="color:#03a5fc">Very Strong!</span>';
	}
	else if (strongRegex.test(pwd.value)) {
		small.innerHTML = '<span style="color:#2ecc70">Strong!</span>';
	} else if (mediumRegex.test(pwd.value)) {
		small.innerHTML = '<span style="color:orange">Medium!</span>';
	} else {
		formControl.className = 'form__div error';
		small.innerHTML = '<span style="color:red">Weak!';
	}
}
