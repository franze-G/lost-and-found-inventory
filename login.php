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
            <div id="error"></div>
            <form id="form" action="" method="POST">
                <div class="input-group">
                    <div class="input-field">
                        <input id="idnum" name="idnum"
                               type="text" placeholder="ID Number">
                            <div id="idnum_error"></div>
                    </div>
                    <div class="input-field">
                        <input id="password" name="password"
                               type="password" placeholder="Password">
                               <div id="pass_error"></div>
                    </div>
                    <p>Login as  <a href="#">user</a></p>
                </div>
                <div class="btn-field">
                    <a href="dashboard.php"><button type="submit" href=>Login</button></a>
                </div>
            </form>
        </div>
    </div>

    <script>
        const idnum = document.getElementById('idnum');
        const password = document.getElementById('password');
        const form = document.getElementById('form');
        const idnum_error = document.getElementById('idnum_error'); // Added this line
        const errorElement = document.getElementById('error'); // Added this line

        form.addEventListener('submit', (e) => {
            let messages = [];

            if (idnum.value === '' || idnum.value === null) {
                messages.push('ID number is required.');
                idnum.style.border = "1px solid red";
                idnum.style.borderRadius ="20px";
                idnum_error.style.display = "flex";
                idnum.classList.add('error');
            } else {
                idnum.style.border = ""; // Reset the border
                idnum_error.style.display = "none"; // Hide the error message
                idnum.classList.remove('error');
            }

            if (password.value.length < 6 || password.value.length === null) {
                messages.push('Password is required.');
                password.style.border = "1px solid red";
                password.style.borderRadius ="20px";
                pass_error.style.display = "flex";
                password.classList.add('error');
            } else {
                password.classList.remove('error');
            }

            if (password.value.length >= 20) {
                messages.push('Password must be less than 20 characters');
                password.classList.add('error');
            } else {
                password.classList.remove('error');
            }

            if (password.value === 'password') {
                messages.push('Password cannot be "password"');
                password.classList.add('error');
            } else {
                password.classList.remove('error');
            }

            if (messages.length > 0) {
                e.preventDefault();
                errorElement.innerText = messages.join('');
            } else {
                errorElement.innerText = ''; // Clear the error message if there are no errors.
            }
        });

    </script>
</body>
</html>
