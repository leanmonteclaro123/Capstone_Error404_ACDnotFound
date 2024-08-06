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

function checkPassword(event){
    let password = document.getElementById("password").value;
    let cnfrmPassword = document.getElementById("cnfrm-password").value;
    console.log("Password:", password, "Confirm Password:", cnfrmPassword);

    if(password.length != 0){
        if(password == cnfrmPassword){
            document.getElementById('cnfrm-password').style.borderColor = "#1dcd59"; // Green
            return true; // Allow form submission
        }
        else{
            document.getElementById('cnfrm-password').style.borderColor = "#ff4d4d"; // Red
            event.preventDefault(); // Prevent form submission
            return false;
        }
    }
    else{
        document.getElementById('cnfrm-password').style.borderColor = ""; // Default
        event.preventDefault(); // Prevent form submission
        return false;
    }
}

// Attach checkPassword function to input events of password fields for real-time feedback
document.getElementById('password').addEventListener('input', checkPassword);
document.getElementById('cnfrm-password').addEventListener('input', checkPassword);

// Function to check role and set ID field requirement
function checkRole() {
    let role = document.getElementById('Role').value;
    let idField = document.getElementById('id_no');

    if (role === 'Student' || role === 'Faculty') {
        idField.setAttribute('required', true);
    } else {
        idField.removeAttribute('required');
    }
}

// Attach checkRole function to change event of role select
document.getElementById('Role').addEventListener('change', checkRole);

// Initial call to checkRole to set the correct state on page load
document.addEventListener('DOMContentLoaded', checkRole);