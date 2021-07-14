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

    <div class="jumbotron text-center">
        <h1>My First Phonebook - SaveContacts</h1>
        <p>Keep your contacts secure!</p>
        <a href="signin" class="btn btn-info" role="button">Get Started</a>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>Security</h3>
                <p>Save your phonebook once and you can log in without a password on a device, for free.</p>
                <p>With Premium, SaveContacts accompanies you on all your devices.</p>
            </div>
            <div class="col-sm-6">
                <h3>Cloud Storage</h3>
                <p>Store any amount of data and access it whenever you need it</p>
                <p>Online contact storage service with worldwide access</p>
            </div>
        </div>
    </div>

    <!-- JS Links !-->
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

</body>

</html>