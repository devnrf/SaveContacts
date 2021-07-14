<?php

require_once 'config/db.php';
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
                    <div class="card-header">List of contact</div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <?php
                                $username = $_SESSION['username'];
                                $query = $connection->prepare("SELECT * FROM contacts WHERE user=:username");
                                $query->bindParam(":username", $username, PDO::PARAM_STR);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                if($query->rowCount() > 0){
                                    foreach($results as $result) { 
                            ?>
                            <div class="col-sm-4">
                                <div class="card mb-2">
                                    <form action="src/contactController.php" method="POST">
                                        <div class="card-body">
                                            <input type="hidden" name="id" value="<?= $result->id?>">
                                            <h6 class="card-title"><?= $result->name;?></h6>
                                            <hr>
                                            <p><b>Phone Number:</b> <?= $result->number;?></p>
                                            <button class="btn btn-danger" type="submit" name="delete">Delete Contact</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php 
                            } 
                                }else{
                                echo "No contacts!";
                                }
                            ?>
                        </div>
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