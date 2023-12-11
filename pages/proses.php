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
    if ($password === 'admin') {
        // Simpan username dalam sesi
        $_SESSION['username'] = $user;

        // Redirect ke halaman utama
        header('Location: ../pages/home.php');
        exit();
    } elseif ($password !== 'admin') {
        echo '<script>alert("Password salah!")</script>';
        echo '<script>window.location="../login.php"</script>';
    } 
    else {
        echo  '<script>window.location="home.php"</script>'; 
    }
}
?>
</body>
</html>