document.addEventListener('DOMContentLoaded', (event) => {
    const registerSuccessModal = document.getElementById("registerSuccessModal");
    const registerErrorModal = document.getElementById("registerErrorModal");
    const loginSuccessModal = document.getElementById("loginSuccessModal");
    const loginErrorModal = document.getElementById("loginErrorModal");
    
    const spanRegisterSuccess = registerSuccessModal.getElementsByClassName("close")[0];
    const spanRegisterError = registerErrorModal.getElementsByClassName("close")[0];
    const spanLoginSuccess = loginSuccessModal.getElementsByClassName("close")[0];
    const spanLoginError = loginErrorModal.getElementsByClassName("close")[0];

    // Check if the session has a register success message
    if (window.hasRegisterSuccessMessage) {
        registerSuccessModal.style.display = "block";
    }

    // Check if the session has a register error message
    if (window.hasRegisterErrorMessage) {
        registerErrorModal.style.display = "block";
    }

    // Check if the session has a login success message
    if (window.hasLoginSuccessMessage) {
        loginSuccessModal.style.display = "block";
    }

    // Check if the session has a login error message
    if (window.hasLoginErrorMessage) {
        loginErrorModal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    spanRegisterSuccess.onclick = function() {
        registerSuccessModal.style.display = "none";
    }

    spanRegisterError.onclick = function() {
        registerErrorModal.style.display = "none";
    }

    spanLoginSuccess.onclick = function() {
        loginSuccessModal.style.display = "none";
    }

    spanLoginError.onclick = function() {
        loginErrorModal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == registerSuccessModal) {
            registerSuccessModal.style.display = "none";
        }
        if (event.target == registerErrorModal) {
            registerErrorModal.style.display = "none";
        }
        if (event.target == loginSuccessModal) {
            loginSuccessModal.style.display = "none";
        }
        if (event.target == loginErrorModal) {
            loginErrorModal.style.display = "none";
        }
    }
});

function showLogin() {
    document.getElementById('login').style.display = 'block';
    document.getElementById('register').style.display = 'none';
}

function showRegister() {
    document.getElementById('register').style.display = 'block';
    document.getElementById('login').style.display = 'none';
}