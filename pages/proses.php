<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Pake session agar data username tidak muncul di URL
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = @$_POST['user-email'];
    $password = @$_POST['user-password'];

    // Contoh validasi login
    if ($password === '12345678') {
        // Simpan username dalam sesi
        $_SESSION['username'] = $user;

        // Redirect ke halaman utama
        header('Location: ../pages/home.php');
        exit();
    } else {
        echo '<div>Login failed. Invalid email or password.</div>';
    }
}
?>
</body>
</html>