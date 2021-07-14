<?php
session_start();
 
if(!isset($_SESSION['username'])){
    header('Location: index.php');
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

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">Add a new contact</div>
                    <div class="card-body">
                        <form action="src/addController.php" method="POST">
                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name" required
                                            autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="number">Phone Number</label>
                                        <input type="text" class="form-control" name="number" placeholder="Phone Number"
                                            required>
                                        <p>If you want to see your contacts <a href="contacts">Click here!</a></p>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="add">Add Contact</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Links !-->
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

</body>

</html>