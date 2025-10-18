const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirm_password');
const showPasswords = document.getElementById('show_passwords');

showPasswords.addEventListener('change', () => {
    const type = showPasswords.checked ? 'text' : 'password';
    password.type = type;
    confirmPassword.type = type;
});

// Optional: Basic front-end validation for matching passwords
const form = document.querySelector('form');
form.addEventListener('submit', (e) => {
    if (password.value !== confirmPassword.value) {
        e.preventDefault();
        alert("❌ Passwords do not match!");
    }
});