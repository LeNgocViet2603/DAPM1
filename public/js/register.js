let password = document.getElementById("password"),
    confirm_password = document.getElementById("confirm-password");

function validatePassword() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Mật khẩu không khớp!");
    } else {
        confirm_password.setCustomValidity("");
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
