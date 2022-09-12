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

    $('#register-form').on('input', function (e) {
        switch (e.target.id) {
            case 'rname':
                checkUsername();
                break;
            case 'remail':
                checkEmail(reEmailEl);
                break;
            case 'rpassword':
                checkPassword(rePassEl);
                break;
            case 'rcpassword':
                checkConfirmPassword();
                break;
        }
    })
    /* End Register validate client  */

    // Register Ajax Request
    $('#register-btn').click(function (e) {
        e.preventDefault();
        if (checkUsername() && checkEmail(reEmailEl) && checkPassword(rePassEl) && checkConfirmPassword()) {
            $('#register-btn').val('Please wait...');
            $.ajax({
                url: '../includes/action.php',
                method: 'post',
                data: $('#register-form').serialize() + '&action=register',
                success: function (res) {
                    $('#register-btn').val('Sign Up');
                    if (res === 'register') {
                        var mess = '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Sign Up Success. You can login now!</strong></div>';
                        $('.resAlert').html(mess);
                    } else {
                        $('.resAlert').html(res);
                    }
                }
            })
        }
    })

    /* Begin Login validate client  */
    const lEmailEl = $('#email');
    const lPassEl = $('#password');

    $('#login-form').on('input', function (e) {
        switch (e.target.id) {
            case 'email':
                checkEmail(lEmailEl);
                break;
            case 'password':
                checkPassword(lPassEl);
                break;
        }
    })
    /* End Login validate client  */
    // Login Ajax Request
    $('#login-btn').click(function (e) {
        e.preventDefault();
        if (checkEmail(lEmailEl) && checkPassword(lPassEl)) {
            $('#login-btn').val('Please wait...');
            $.ajax({
                url: '../includes/action.php',
                method: 'post',
                // serialize(): lấy val của input trong form cho vào 1 arr
                // Nếu: input là checkbox thì chỉ khi checkbox được checked thì mới tồn tại phần tử này trong arr
                // + '$action=login': thêm vào arr 1 phần tử là action => 'login'
                // 
                data: $('#login-form').serialize() + '&action=login',
                success: function (res) {
                    $('#login-btn').val('Sign In');
                    if (res == 'login') {
                        window.location = 'home.php';
                    } else {
                        $('.logAlert').html(res);
                    }
                }
            })
        }
    })

    // Forgot Ajax Request
    $('#forgot-btn').click(function (e) {
        e.preventDefault();
        $('#forgot-btn').val('Please wait...');
        $.ajax({
            url: '../includes/action.php',
            method: 'post',
            data: $('#forgot-form').serialize() + '&action=forgot',
            success: function (res) {
                $('#forgot-btn').val('Reset Password');
                if (res == 'forgot') {

                } else {
                    $('.forgotAlert').html(res);
                }
            }
        })
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
    function checkEmail(emailEl) {
        let valid = false;
        const emailVl = emailEl.val().trim('');
        if (!isRequired(emailVl)) {
            showError(emailEl, 'Email cannot be blank.');
        } else if (!isEmailValid(emailVl)) {
            showError(emailEl, 'Email is not valid.');
        } else {
            showSuccess(emailEl);
            valid = true;
        }
        return valid;
    }
    // password: not empty, secure password
    function checkPassword(passEl) {
        let valid = false;
        const passVl = passEl.val().trim('');
        if (!isRequired(passVl)) {
            showError(passEl, 'Password cannot be blank.');
        } else if (!isPasswordSecure(passVl)) {
            showError(passEl, 'Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number, and 1 special character in (!@#$%^&*).');
        } else {
            showSuccess(passEl);
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

