const firstname = document.getElementById('firstname')
const lastname = document.getElementById('lastname')
const email = document.getElementById('email')
const username = document.getElementById('username')
const password = document.getElementById('password')
const firstnameErr = document.getElementById('firstnameErr')
const lastnameErr = document.getElementById('lastnameErr')
const emailErr = document.getElementById('emailErr')
const usernameErr = document.getElementById('usernameErr')
const passwordErr = document.getElementById('passwordErr')
const form = document.getElementById('form')

form.addEventListener('submit', (e) => {
  let messages = []

  var textFormat = /^[A-Za-z0-9 ]+$/;
  var isValid=textFormat.test(firstname.value) 
  if (!isValid) {
    messages[0] = "Only letters and white space allowed"
    firstnameErr.innerText = messages[0]
  }
  
  var isValid=textFormat.test(lastname.value) 
  if (!isValid) {
    messages[0] = "Only letters and white space allowed"
    lastnameErr.innerText = messages[0]
  }
  
  var isValid=textFormat.test(username.value) 
  if (!isValid) {
    messages[0] = "Only letters and white space allowed"
    usernameErr.innerText = messages[0]
  } 

  var passwordFormat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/
  var isValid = passwordFormat.test(password.value)
  if (password.value.length < 8) {
    messages[1] = "Minimum of 8 characters"
    passwordErr.innerText = messages[1]
  } else if(!password.value.match(passwordFormat)) {
    messages[2] = "Must contain small letter, capital letter, number and special characters"
    passwordErr.innerText = messages[2]
  } 
  
  if(messages.length>0) {
    e.preventDefault()
  }
})
