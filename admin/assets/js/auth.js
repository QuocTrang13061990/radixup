$(document).ready(function () {
    $('#register-link').click(function () {
        $('#register-box').show();
        $('#login-box').hide();
    })
    $('#login-link').click(function () {
        $('#login-box').show();
        $('#register-box').hide();
    })
    $('#forgot-link').click(function () {
        $('#forgot-box').show();
        $('#login-box').hide();
    })
    $('#back-link').click(function () {
        $('#login-box').show();
        $('#forgot-box').hide();
    })
    /* Begin Register validate client  */
    const reNameEl = $('#rname');
    const reEmailEl = $('#remail');
    const rePassEl = $('#rpassword');
    const reConPassEl = $('#rcpassword');
    
    $('#register-form').on('input', function(e) {
        switch (e.target.id) {
            case 'rname' : 
                checkUsername();
                break;
            case 'remail' : 
                checkEmail();
                break;
            case 'rpassword' : 
                checkPassword();
                break;
            case 'rcpassword' : 
                checkConfirmPassword();
                break;
        }
    })
    /* End Register validate client  */
    // Register Ajax Request
    $('#register-btn').click(function (e) {
        // e.preventDefault;
       
    })





   
   
    // username: not empty, 3=<length<=25
    function checkUsername() {
        let valid = false;
        const min = 3, max = 25;
        const reNameVl = reNameEl.val().trim('');
        if (!isRequired(reNameVl)) {
            showError(reNameEl, 'Username cannot be blank.');
        } else if (reNameVl.length < min || reNameVl.length > max) {
            showError(reNameEl, `Username must be between ${min} and ${max} characters.`);
        } else {
            showSuccess(reNameEl);
            valid = true;
        }
        return valid;
    }

    // email: not empty, correct email format
    function checkEmail() {
        let valid = false;
        const reEmailVl = reEmailEl.val().trim('');
        if (!isRequired(reEmailVl)) {
            showError(reEmailEl, 'Email cannot be blank.');
        } else if (!isEmailValid(reEmailVl)) {
            showError(reEmailEl, 'Email is not valid.');
        } else {
            showSuccess(reEmailEl);
            valid = true;
        }
        return valid;
    }
    // password: not empty, secure password
    function checkPassword() {
        let valid = false;
        const rePassVl = rePassEl.val().trim('');
        if (!isRequired(rePassVl)) {
            showError(rePassEl, 'Password cannot be blank.');
        } else if (!isPasswordSecure(rePassVl)) {
            showError(rePassEl, 'Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number, and 1 special character in (!@#$%^&*).');
        } else {
            showSuccess(rePassEl);
            valid = true;
        }
        return valid;
    }
    // confirm password: match password
    function checkConfirmPassword() {
        let valid = false;
        const rePassVl = rePassEl.val().trim('');
        const reConfirmPasswordVl = reConPassEl.val().trim('');
        if (reConfirmPasswordVl !== rePassVl) {
            showError(reConPassEl, 'Confirm password does not match')
        } else {
            showSuccess(reConPassEl);
            valid = true;
        }
        return valid;
    }

    /* Begin Function Validate client */
    function showError(input, message) {
        const formField = input.parent();
        formField.addClass('error');
        formField.removeClass('success');
        const errorEl = formField.next();
        errorEl.text(message);
    }

    function showSuccess(input) {
        const formField = input.parent();
        formField.removeClass('error');
        formField.addClass('success');
        const errorEl = formField.next();
        errorEl.text('');
    }

    function isRequired(val) {
        return (val === '') ? false : true;
    }

    function isEmailValid(email) {
        const pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return pattern.test(email); // kiểm tra email có đúng định dạng pattern hay không
    }

    function isPasswordSecure(password) {
        const pattern = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
        return pattern.test(password);
    }
})

