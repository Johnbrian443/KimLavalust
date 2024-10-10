<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #1a1a1a;
            color: white;
            font-family: 'Arial', sans-serif;
        }

        .form-container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #2b2b2b;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5);
        }

        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-header h5 {
            color: #00c851;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .form-control {
            background-color: #3d3d3d;
            border: 1px solid #00c851;
            color: white;
        }

        .form-control:focus {
            background-color: #3d3d3d;
            border-color: #00c851;
            box-shadow: none;
        }

        .input-group-text {
            background-color: #3d3d3d;
            border: 1px solid #00c851;
            cursor: pointer;
        }

        .btn-green {
            background-color: #00c851;
            border: none;
            color: white;
            font-size: 1rem;
            padding: 10px;
            border-radius: 5px;
        }

        .btn-green:hover {
            background-color: #00a63f;
        }

        .btn-secondary-custom {
            background-color: #666;
            color: white;
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
        }

        .btn-secondary-custom:hover {
            background-color: #555;
        }

        .form-text {
            color: #ccc;
        }

        .password-error {
            color: red;
        }
    </style>
</head>
<body>

<div class="form-container">
    <div class="form-header">
        <i class="fa-solid fa-right-to-bracket fa-2x" style="color: #00c851;"></i>
        <h5>Login to Your Account</h5>
    </div>
    <form action="<?= site_url('authlogin'); ?>" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="inputPassword5" class="form-label">Password</label>
            <div class="input-group">
                <input type="password" id="inputPassword5" name="password" class="form-control" minlength="8" required>
                <button type="button" id="togglePassword" class="input-group-text">
                    <i class="fas fa-eye" id="passwordToggleIcon"></i>
                </button>
            </div>
            <p id="passwordErrorMessage" class="password-error"></p>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-green">Login</button>
        </div>
        <div class="d-grid gap-2 mt-3">
            <a href="/register" class="btn btn-secondary-custom">Create an Account</a>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    document.getElementById("togglePassword").addEventListener("click", togglePasswordVisibility);

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
