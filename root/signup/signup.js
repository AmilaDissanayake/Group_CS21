{/* <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script> */ }
const form = document.getElementById('form');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
// const gender = document.getElementById('gender');
const mnumber = document.getElementById('mnumber');
// const dob = document.getElementById('dob');
const address = document.getElementById('address');
// const inj = document.getElementById('inj');
const email = document.getElementById('email');
const username = document.getElementById('username');
const password1 = document.getElementById('password1');
const password2 = document.getElementById('password2');
const checkbox1 = document.getElementById('mycheck');
// const trainer = document.getElementById('trainer');

// payhere.onCompleted = function onCompleted(orderId) {
// 	// document.getElementById("form").submit();
// 	alert("Payment complete");
// 	console.log("Payment completed");
// 	//Note: validate the payment and show success or failure page to the customer
// };

// // Called when user closes the payment without completing
// payhere.onDismissed = function onDismissed() {
// 	//Note: Prompt user to pay again or show an error page
// 	console.log("Payment dismissed");
// };

// // Called when error happens when initializing payment such as invalid parameters
// payhere.onError = function onError(error) {
// 	// Note: show an error page
// 	console.log("Error:" + error);
// };

// Put the payment variables here
// var payment = {
// 	"sandbox": true,
// 	"merchant_id": "1218759", // Replace your Merchant ID
// 	"return_url": undefined, // Important
// 	"cancel_url": undefined, // Important
// 	"notify_url": "http://sample.com/notify",
// 	"order_id": "ItemNo12345",
// 	"items": "Door bell wireles",
// 	"amount": "1000.00",
// 	"currency": "LKR",
// 	"first_name": "Saman",
// 	"last_name": "Perera",
// 	"email": "samanp@gmail.com",
// 	"phone": "0771234567",
// 	"address": "No.1, Galle Road",
// 	"city": "Colombo",
// 	"country": "Sri Lanka",
// 	"delivery_address": "No. 46, Galle road, Kalutara South",
// 	"delivery_city": "Kalutara",
// 	"delivery_country": "Sri Lanka",
// 	"custom_1": "",
// 	"custom_2": ""
// };

var isValid;

form.addEventListener("submit", function (e) {
	checkInputs();
	if (!isValid) {
		e.preventDefault();
	}
	// else if(isValid){
	// 	// payhere.startPayment(payment);
	// }

	// else {
	// 	payhere.startPayment(payment);
	// }
	// return true;

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
		isValid = false;
	}
	else if (isnotvalid(fnameValue)) {
		setErrorFor(fname, 'Invalid Input');
		isValid = false;
	}
	else {
		setSuccessFor(fname);
		isValid = true;
	}

	if (lnameValue === '') {
		setErrorFor(lname, 'Last name cannot be blank');
		isValid = false;
	} else if (isnotvalid(lnameValue)) {
		setErrorFor(lname, 'Invalid Input');
		isValid = false;
	}
	else {
		setSuccessFor(lname);
		isValid = true;
	}

	// if (genderValue === ' Gender ') {
	// 	setErrorFor(gender, 'Select a gender');
	// } else {
	// 	setSuccessFor(gender);
	// }

	if (mnumberValue === '') {
		setErrorFor(mnumber, 'Mobile No. cannot be blank');
		isValid = false;
	} else if (isnotvalidnum(mnumberValue)) {
		setErrorFor(mnumber, 'Invalid Input');
		isValid = false;
	}
	else if (!isValidlen(mnumberValue)) {
		setErrorFor(mnumber, 'Phone no. length is Invalid');
		isValid = false;
	}
	else {
		setSuccessFor(mnumber);
		isValid = true;
	}

	// if (genderValue === ' Gender ') {
	// 	setErrorFor(gender, 'Select a gender');
	// } else {
	// 	setSuccessFor(gender);
	// }

	if (addressValue === '') {
		setErrorFor(address, 'Address cannot be blank');
		isValid = false;
	} else {
		setSuccessFor(address);
		isValid = true;
	}

	// if (injValue === '') {
	// 	setErrorFor(inj, 'Injuries Field cannot be blank,Apply NO if there is no injuries');
	// 	isValid = false;
	// } else {
	// 	setSuccessFor(inj);
	// 	isValid = true;
	// }

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

	if (usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
		isValid = false;
	}
	else if (!isusername(usernameValue)) {
		setErrorFor(username, 'User Name is Too Short');
		isValid = false;
	}
	else {
		setSuccessFor(username);
		isValid = true;
	}

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
	} else if (!pwlength(password2Value)) {
		setErrorFor(password2, 'Selected Password is not Strong enough');
		isValid = false;	
	}else if (password2Value !== password1Value) {
		setErrorFor(password2, 'Re-Entered Password is wrong');
		isValid = false;
	} else {
		setSuccessFor(password2);
		isValid = true;
	}

	// if(checkbox1.checked == true){
	// 	isValid = true;
	// }else{
	// 	isValid = false;
	// 	alert("hee")
	// }

	// if (genderValue === ' Gender ') {
	// 	setErrorFor(gender, 'Select a gender');
	// } else {
	// 	setSuccessFor(gender);
	// }
}


function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	if (input === inj) {
		formControl.className = 'inj__div error';
		small.innerText = message;
	} else {
		formControl.className = 'form__div error';
		small.innerText = message;
	}

}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	if (input === inj) {
		formControl.className = 'inj__div success';
	} else {
		formControl.className = 'form__div success';
	}
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isnotvalid(name) {
	let invalidn = new RegExp('(?=.*[0-9])')
	if (invalidn.test(name)) {
		return true;
	}
	return false;
}

function isnotvalidnum(mnumber) {
	let invalid = new RegExp('(?=.*[a-z])|(?=.*[A-Z])')
	if (invalid.test(mnumber)) {
		return true;
	}
	return false;
}
function isValidlen(mnumber) {
	let validnum = new RegExp("^[0-9]{10}$")
	if (validnum.test(mnumber)) {
		return true;
	}
	return false;
}

function isusername(username) {
	let invalidu = new RegExp('(?=.{6,})')
	if (invalidu.test(username)) {
		return true;
	}
	return false;
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
