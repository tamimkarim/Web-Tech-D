const form = document.getElementById('formId');
const email = document.getElementById('emailId');
const emailError = document.getElementById('emailErrorId');
const password = document.getElementById('passwordId');
const passwordError = document.getElementById('passwordErrorId');

// Show input error message
function showError(field, errorField, errorMessage) {
  const formControl = field.parentElement;
  formControl.className = 'form-control error';
  errorField.innerText = errorMessage;
}

// Show success outline
function showSuccess(input, errorField) {
  const formControl = input.parentElement;
  formControl.className = 'form-control success';
  errorField.innerText = "";
}

// Check email is valid
function checkEmail(input) {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (re.test(input.value.trim())) {
    showSuccess(input, emailError);
  } else {
    showError(input,emailError, 'Email is not valid');
  }
}

// Check passwor is valid
function checkpassword(input) {
  const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{6,})");
  if (re.test(input.value.trim())) {
    showSuccess(input, passwordError);
  } else {
   // const passwordError = document.getElementById('passwordErrorId');
    showError(input,passwordError, 'password is not valid');
  }
}


// Event listeners
form.addEventListener('submit', function(e) {
    e.preventDefault();
    checkEmail(email);
    checkpassword(password);

  
  });

