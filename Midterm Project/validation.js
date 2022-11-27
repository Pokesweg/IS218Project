email.onkeyup = function() { 
   var characters = /[a-zA-Z0-9_\\.\\+-]+@[a-zA-Z0-9-]+\\.[a-zA-Z0-9-\\.]+/g;
   if(email.value.match(characters)) {  
     letter.classList.remove("invalid");
     letter.classList.add("valid");
  } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
  }
var upperCaseLetters = /[A-Z]/g;
var lowerCaseLetters = /[a-z]/g;
if(fname.value.match(lowerCaseLetters)) && (fname.value.match(upperCaseLetters)) {  
  letter.classList.remove("invalid");
  letter.classList.add("valid");
} else {
  letter.classList.remove("valid");
  letter.classList.add("invalid");
}
if(lname.value.match(lowerCaseLetters)) && (lname.value.match(upperCaseLetters)) {  
  letter.classList.remove("invalid");
  letter.classList.add("valid");
} else {
  letter.classList.remove("valid");
  letter.classList.add("invalid");
}
psw.onkeyup = function() {
  var lowerCaseLetters = /[a-z]/g;
  if(psw.value.match(lowerCaseLetters) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  var upperCaseLetters = /[A-Z]/g;
  if(psw.value.match(upperCaseLetters) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }
  var numbers = /[0-9]/g;
  if(psw.value.match(numbers) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
}