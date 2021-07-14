<?php

require_once '../config/db.php';
session_start();

if(isset($_POST['signin'])){
    $username = $_POST['username'];
    $password = hash("sha256", $_POST['password']);

    $query = $connection->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
    $query->bindParam(":username", $username, PDO::PARAM_STR);
    $query->bindParam(":password", $password, PDO::PARAM_STR);
    $query->execute();

    $check = $query->fetch(PDO::FETCH_ASSOC);

    if (!$check) {
        echo "<script> alert('Username password combination is wrong!');
        window.location.href='../index';
        </script>";
    } else {
        if ($check['password'] = $password) {
            $_SESSION['username'] = $check['username'];
            echo "<script> alert('Congratulations, you are logged in!');
            window.location.href='../home';
            </script>";
        } else {
            echo "<script> alert('Username password combination is wrong!');
            window.location.href='../index';
            </script>";
        }
    }
}

?>