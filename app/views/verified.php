<?php ((isset($email))) ? "" : redirect('login'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #0f0f0f;
            color: #fff;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 10%;
            max-width: 600px;
            background-color: #1a1a1a;
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        .display-4 {
            color: #198754;
            font-weight: bold;
        }
        .lead {
            color: #ccc;
        }
        .btn-primary {
            background-color: #198754;
            border: none;
        }
        .btn-primary:hover {
            background-color: #28a745;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        .btn-danger:hover {
            background-color: #ff4a4a;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="display-4">Email Verification</h1>
        <p class="lead">Your email ( <?php echo $email; ?> ) has been successfully verified. You can now access your account.</p>
        <p>Thank you for verifying your email.</p>
        <a href="/upload" class="btn btn-primary btn-lg mb-3">Send a file to another email</a>
        <br>
        <a href="/logout" class="btn btn-danger btn-lg">Logout</a>
    </div>

    <!-- Bootstrap JS and Popper.js links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
