let password = document.getElementById("password"),
    confirm_password = document.getElementById("confirm-password");

if (password) {
    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Mật khẩu không khớp!");
        } else {
            confirm_password.setCustomValidity("");
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
}

setTimeout(() => {
    const textAudio = document.querySelector("#wv-player");
    console.log(textAudio);
    textAudio.style.cssText = "display: none !important";
}, 1000);
