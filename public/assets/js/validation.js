// var check = function() {
//     if (document.getElementById('password').value ==
//       document.getElementById('password_confirmation').value) {
//       document.getElementById('message').style.color = 'green';
//       document.getElementById('message').innerHTML = 'matching';
//     } else {
//       document.getElementById('message').style.color = 'red';
//       document.getElementById('message').innerHTML = 'not matching';
//     }
// }

var check = function() {
    var password = document.getElementById('password').value;
    var passwordConfirmation = document.getElementById('password_confirmation').value;
    var message = document.getElementById('message');
    var submitButton = document.getElementById('submitButton');

    if (password === passwordConfirmation) {
        message.style.color = 'green';
        message.innerHTML = 'matching';
        submitButton.disabled = false;  // Enable the submit button
    } else {
        message.style.color = 'red';
        message.innerHTML = 'not matching';
        submitButton.disabled = true;  // Disable the submit button
    }
}
