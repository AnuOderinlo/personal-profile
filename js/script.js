var formName = document.getElementById("name");
var formEmail = document.getElementById("email");
var formPhone = document.getElementById("phone");
var formText = document.getElementById("text");
var formSubmit = document.getElementById("submit");
var errorName = document.getElementById("errorName");
var errorPhone = document.getElementById("errorPhone");
var errorEmail = document.getElementById("errorEmail");

// form validation
function formValidate(argument) {
	/**input name must be letters only	
	input email must have @ and . in the email
	input phone must contain
		a. only Numbers
		b. min of 11 digits and max of 13 digits
	input button must not submit if
		a. name is not filled
		b. phone number is not filled
		c. email is not filled**/
	// event.preventDefault()
	formSubmit.addEventListener('click', function (event) {
		 if (formName.value =='' && formPhone.value == '' && formEmail.value =='') {
		 	errorName.innerHTML = "Your Name is required please!!!";
		 	errorEmail.innerHTML = "Your email is required please!!!";
			errorPhone.innerHTML = "Your phone number is required please!!!";
			errorName.style.color = 'red';
			errorEmail.style.color = 'red';
			errorPhone.style.color = 'red';
			formName.style.border = '1px solid red';
			formEmail.style.border = '1px solid red';
			formPhone.style.border = '1px solid red';
		}else if (formName.value =='' && formPhone.value !== '' && formEmail.value !=='') {
			errorName.innerHTML = "Your name is required please!!!";
			errorName.style.color = 'red';
		}else if (formName.value !=='' && formPhone.value == '' && formEmail.value =='') {
			errorEmail.innerHTML = "Your email is required please!!!";
			errorPhone.innerHTML = "Your phone number is required please!!!";
			errorEmail.style.color = 'red';
			errorPhone.style.color = 'red';
		}else if (formPhone.value =='' && formName.value !== '' && formEmail.value !==''){
			errorPhone.innerHTML = "Your phone number is required please!!!";
			errorPhone.style.color = 'red';
		}else if (formPhone.value !=='' && formName.value == '' && formEmail.value =='') {
			errorName.innerHTML = "Your name is required please!!!";
			errorEmail.innerHTML = "Your email is required please!!!";
			errorEmail.style.color = 'red';
			errorName.style.color = 'red';
		}else if (formEmail.value =='' && formName.value !== '' && formPhone.value !==''){
			errorEmail.innerHTML = "Your email number is required please!!!";
			errorEmail.style.color = 'red';
		}else if (formEmail.value !=='' && formName.value == '' && formPhone.value =='') {
			errorName.innerHTML = "Your name is required please!!!";
			errorPhone.innerHTML = "Your phone is required please!!!";
			errorName.style.color = 'red';
			errorPhone.style.color = 'red';
		}else if (isNaN(formPhone.value) === true) {
			formPhone.style.border = '1px solid red';
			errorPhone.innerHTML = "Only number is allowed";
			errorPhone.style.color = 'red';
		}
		else {
			formName.value = '';
			formEmail.value = '';
			formPhone.value = '';
		}
	}, false)


	formName.addEventListener('focus', function (argument) {
		errorName.innerHTML = '';
		formName.style.border = '';
	})
	formPhone.addEventListener('focus', function (argument) {
		errorPhone.innerHTML = '';
		formPhone.style.border = '';
	})
	formEmail.addEventListener('focus', function (argument) {
		errorEmail.innerHTML = '';
		formEmail.style.border = '';
	})

	// formSubmit.addEventListener('blur', function (argument) {
	// 	formName.style.border = '';
	// 	formPhone.style.border = '';
	// 	formEmail.style.border = '';
		
	// })
}

formValidate();



function content(argument) {
	var name = document.getElementById("myName");
	name.textContent = "Anuoluwapo Oderinlo";
  return name;
}

// content();