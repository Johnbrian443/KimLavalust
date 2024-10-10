<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #0f0f0f;
            color: #fff;
            font-family: 'Arial', sans-serif;
        }
        .card {
            background-color: #1a1a1a;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            color: #fff;
        }
        .card-header {
            background-color: #198754;
            border-radius: 10px 10px 0 0;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .form-label {
            color: #bbb;
        }
        .btn-outline-primary {
            color: #198754;
            border-color: #198754;
        }
        .btn-outline-primary:hover {
            background-color: #198754;
            color: #fff;
        }
        .input-group-text {
            background-color: #198754;
            border: none;
            color: #fff;
        }
        .btn-success {
            background-color: #198754;
            border: none;
        }
        .form-control, .input-group-text {
            border: 1px solid #555;
            background-color: #2a2a2a;
            color: #fff;
        }
        .form-control:focus {
            border-color: #198754;
            box-shadow: none;
        }
        .form-text {
            color: #777;
        }
        #passwordErrorMessage {
            color: #ff4a4a;
        }
    </style>
</head>
<body>

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card w-50">
        <h5 class="card-header">
            <i class="card-icon fa-solid fa-right-to-bracket"></i>
            Create Your Account
            <i class="card-icon fa-solid fa-user"></i>
        </h5>
        <div class="card-body">
            <form action="<?= site_url('createaccount'); ?>" method="post" onsubmit="return validatePassword();">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" aria-describedby="emailBlock" required>
                    <div class="form-text" id="emailBlock">
                        Enter a valid email. A confirmation link will be sent to you.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" id="inputPassword5" name="password" class="form-control" minlength="8" required>
                        <button type="button" id="togglePassword" class="input-group-text">
                            <i class="fas fa-eye" id="passwordToggleIcon"></i>
                        </button>
                    </div>
                    <p id="passwordErrorMessage"></p>
                    <div class="form-text" id="passwordBlock">
                        Password must be 8-20 characters long, contain letters and numbers, no spaces, special characters, or emojis.
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <input type="submit" value="Create Account" class="btn btn-outline-primary" onclick="validatePassword()">
                </div>
                <br>
                <div class="d-grid gap-2">
                    <a href="/login" class="btn btn-success">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.getElementById("togglePassword").addEventListener("click", togglePasswordVisibility);

function validatePassword() {
    const passwordInput = document.getElementById("inputPassword5");
    const password = passwordInput.value;

    const specialCharacterRegex = /[!@#\$%\^&\*()_\-+\{\}\|\[\]:;"'<>,\./]/;
    const numberRegex = /[0-9]/;
    const uppercaseLetterRegex = /[A-Z]/;
    const lowercaseLetterRegex = /[a-z]/;

    if (
        specialCharacterRegex.test(password) &&
        numberRegex.test(password) &&
        uppercaseLetterRegex.test(password) &&
        lowercaseLetterRegex.test(password) &&
        password.length >= 8
    ) {
        document.getElementById("passwordErrorMessage").textContent = "";
        return true;
    } else {
        document.getElementById("passwordErrorMessage").textContent =
            "Password must contain at least 1 special character, 1 number, 1 uppercase and lowercase letter, and be at least 8 characters long.";
        return false;
    }
}

function togglePasswordVisibility() {
    const passwordInput = document.getElementById("inputPassword5");
    const passwordToggleIcon = document.getElementById("passwordToggleIcon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggleIcon.classList.remove("fa-eye");
        passwordToggleIcon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        passwordToggleIcon.classList.remove("fa-eye-slash");
        passwordToggleIcon.classList.add("fa-eye");
    }
}
</script>

</body>
</html>
