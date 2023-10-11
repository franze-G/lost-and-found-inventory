<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
    <div class="container">
        <img class="logo" src="adam.png" alt="Adamson">
        <div class="form-box">
            <div id="error" class="error"></div>
            <form id="form" action="" method="POST">
                <div class="input-group">
                    <div class="input-field">
                        <input id="idnum" name="idnum"
                               type="number" placeholder="ID Number" required>
                    </div>
                    <div class="input-field">
                        <input id="password" name="password"
                               type="password" placeholder="Password" required>
                    </div>
                    <p>Forgot password <a href="#">click here</a></p>
                </div>
                <div class="btn-field">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script>
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
            } else {
                errorElement.innerText = ''; // Clear the error message if there are no errors.
            }
        });

    </script>
</body>
</html>
