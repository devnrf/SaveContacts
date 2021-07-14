<?php

require_once '../config/db.php';
session_start();

if(isset($_POST['edit'])){

}

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $query = $connection->prepare("DELETE FROM contacts WHERE id=:id");
    $query->bindParam(":id", $id, PDO::PARAM_STR);
    $result = $query->execute();

    if($result){
        echo "<script> alert('Contact successfully eliminated!');
        window.location.href='../contacts';
        </script>";
    }
}

?>