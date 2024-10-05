<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'skagata' && $password == 'jayajaya') {
        $_SESSION['logged_in'] = true;
        header("Location: /ReoveLibrary/index.php"); // Update this path to point to the correct index.php
        exit();
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ReoveLibrary</title>
    <link rel="stylesheet" href="/ReoveLibrary/css/style.css"> <!-- Update path -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Tambahkan CSS untuk background gambar */
        body {
            background-image: url('/ReoveLibrary/assets/bg login.jpg'); /* Path gambar background */
            background-size: cover;
            background-position: center;
            height: 100vh; /* Mengatur tinggi halaman */
        }

        .login-container {
            background: rgba(255, 255, 255, 0.8); /* Buat form transparan */
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin: 100px auto;
        }
    </style>

</head>
<body>
    <div class="login-container">
        <!-- Tambahkan logo kecil di atas form -->
        <div class="text-center">
            <img src="/ReoveLibrary/assets/gambar 1.png" alt="ReoveLibrary Logo" width="100" height="100">
        </div>

        <form action="" method="post" class="login-form">
            <h2 class="text-center">Login</h2>
            <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
</body>
</html> 
