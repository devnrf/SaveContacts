<?php

require_once '../config/db.php';
session_start();

if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = hash("sha256", $_POST['password']);

    $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo "<script> alert('Username is already registered!');
        window.location.href='../register';
        </script>";
    }

    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO users(FULLNAME,USERNAME,PASSWORD) VALUES (:fullname,:username,:password)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password", $password, PDO::PARAM_STR);
        $query->bindParam("fullname", $fullname, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo "<script> alert('Your registration was successful!');
            window.location.href='../index';
            </script>";
        } else {
            echo "<script> alert('Something went wrong!');
            window.location.href='../register';
            </script>";
        }
    }
}
