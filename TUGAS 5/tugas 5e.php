<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>

<?php
// Set data login yang benar
$correctUsername = 'admin';
$correctPassword = 'password';

// Inisialisasi variabel untuk pesan kesalahan
$error = '';

// Periksa apakah formulir telah dikirim (metode POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Periksa apakah parameter 'username' dan 'password' ada pada metode POST
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Periksa apakah data login benar
    if ($username === $correctUsername && $password === $correctPassword) {
        // Jika benar, redirect ke halaman admin
        header('Location: admin(5e).php');
        exit;
    } else {
        // Jika salah, tampilkan pesan kesalahan
        $error = 'Username atau password salah.';
    }
}
?>

<form action="" method="post">
  <label for="username">Username:</label>
  <input type="text" name="username" required><br>

  <label for="password">Password:</label>
  <input type="password" name="password" required><br>

  <input type="submit" value="Login">
</form>

<p style="color: red;"><?php echo $error; ?></p>

</body>
</html>