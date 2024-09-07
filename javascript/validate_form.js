function validateForm() {
    var Sname = document.getElementById('Sname').value;
    var Fname = document.getElementById('Fname').value;
    var Lname = document.getElementById('Lname').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var SnameError = document.getElementById('SnameError');
    var FnameError = document.getElementById('FnameError');
    var LnameError = document.getElementById('LnameError');
    var emailError = document.getElementById('emailError');
    var phoneError = document.getElementById('phoneError');

    SnameError.innerHTML = '';
    FnameError.innerHTML = '';
    LnameError.innerHTML = '';
    emailError.innerHTML = '';
    phoneError.innerHTML = '';

    if (Sname === '') {
        SnameError.innerHTML = 'Surame is required.';
    }
    if (Fname === '') {
        FnameError.innerHTML = 'First Name is required.';
    }
    if (Lname === '') {
        LnameError.innerHTML = 'Middle name is required.';
    }
    if (email === '') {
        emailError.innerHTML = 'Email is required.';
    }
    if (phone === '') {
        phoneError.innerHTML = 'Phone Number is required.';
    }

    if (Sname === '' || Fname === '' || Lname === '' || email === '' || phone === '') {
        return; 
    } else {
        document.getElementById('myForm').submit();
    }
}