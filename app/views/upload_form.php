<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #0f0f0f;
            color: #fff;
            font-family: 'Arial', sans-serif;
        }
        .form-container {
            background-color: #1a1a1a;
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            max-width: 600px;
            margin: auto;
        }
        .display-4 {
            color: #198754;
            font-weight: bold;
        }
        .form-control {
            background-color: #2a2a2a;
            border: 1px solid #555;
            color: #fff;
        }
        .form-control:focus {
            border-color: #198754;
            box-shadow: none;
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
        a {
            color: #fff;
            text-decoration: none;
        }
        a:hover {
            color: #ccc;
        }
    </style>
</head>
<body class="mt-5">
    <div class="form-container text-center">
        <?php if(isset($errors)): ?>
            <div class="alert alert-danger">
                <?php foreach($errors as $error): ?>
                    <p><?= $error ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <h1 class="display-4">Send to Email</h1>
        <p class="lead">Try sending a file to your email.</p>
        
        <form action="<?php echo site_url('/do_upload');?>" method="post" enctype="multipart/form-data">
            <input type="text" name="name" class="form-control mb-3" placeholder="Enter the Email's Title or your name..."/>
            <input type="email" name="email" class="form-control mb-3" placeholder="Enter recipient's Email..."/>
            <input type="text" name="subject" class="form-control mb-3" placeholder="Enter email's Subject..."/>
            <textarea name="content" class="form-control mb-3" placeholder="Enter email's Content..." rows="3"></textarea>
            <input type="file" name="userfile" class="form-control mb-3" accept="image/png, image/gif, image/jpeg" />
            <input type="submit" value="Upload" class="btn btn-primary btn-block" />
        </form>
        <br>
        <a href="/logout" class="btn btn-danger">Logout</a>
    </div>

    <!-- Bootstrap JS and Popper.js links (required for Bootstrap components) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
