const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "admin" && password === "admin123") {
        alert("You have successfully logged in as Admin.");
        location.reload();
        location.href = 'rms.php';

    }
    else if (username === "user" && password === "user123") {
        alert("You have successfully logged in as user.");
        location.reload();
        location.href = 'staff.php';
    }
    else {
        loginErrorMsg.style.opacity = 1;
    }
})
