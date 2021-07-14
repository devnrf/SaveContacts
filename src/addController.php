<?php

require_once '../config/db.php';
session_start();

if(isset($_POST['add'])){
    $username = $_SESSION['username'];
    $name = $_POST['name'];
    $number = $_POST['number'];

    $query = $connection->prepare("INSERT INTO contacts (user,name,number) VALUES (:username,:name,:number)");
    $query->bindParam(":username", $username, PDO::PARAM_STR);
    $query->bindParam(":name", $name, PDO::PARAM_STR);
    $query->bindParam(":number", $number, PDO::PARAM_STR);
    $result = $query->execute();
    
    if ($result) {
        echo "<script> alert('Contact successfully added!');
        window.location.href='../contacts';
        </script>";
    } else {
        echo "<script> alert('Something went wrong!');
        window.location.href='../home';
        </script>";
    }

}

?>
