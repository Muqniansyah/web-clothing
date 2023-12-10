<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        <?php include "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" ?>
        <?php include "./assets/styles/login.css" ?>

    </style>
</head>
<body>
    <div class="container">
        <div class="form-container log-in-container">
            <form id="logForm" method="POST" action="./pages/proses.php">
                <div class="sub-container">
                    <img src="./assets/img/login/hunt-cloth2.png" alt="login-images">
                    <h1>Login</h1>
                </div>
                <input placeholder="Email" name="user-email" type="email" required>
                <input type="password" placeholder="Password" name="user-password">
                <button id="logButton">Login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel">
                    <img src="./assets/img/login/hunt-cloth1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/script.js">
          
</script>
</html>