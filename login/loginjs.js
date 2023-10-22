const idnum = document.getElementById('idnum');
const password = document.getElementById('password');
const form = document.getElementById('form');
const errorElement = document.getElementById('error');

form.addEventListener('submit', (e) => {
    let messages = [];

    if (idnum.value === '' || idnum.value === null) {
        messages.push('ID number is required');
    }

    if (password.value.length < 6) {
        messages.push('Password must be at least 6 characters long');
    }

    if (password.value.length >= 20) {
        messages.push('Password must be less than 20 characters');
    }

    if (password.value === 'password') {
        messages.push('Password cannot be "password"');
    }

    if (messages.length > 0) {
        e.preventDefault();
        errorElement.innerText = messages.join(', ');
    }
});
