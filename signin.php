<?php
session_start();
 
if(isset($_SESSION['username'])){
    header('Location: home');
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeContacts | Keep your contacts secure</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <?php require_once 'templates/nav.php'; ?>

    <form action="src/loginController.php" method="POST">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1>Sign In</h1>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <p>Don't have account yet? <a href="register.php">Click here to register!</a></p>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="signin">Sign In</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- JS Links !-->
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

</body>

</html>