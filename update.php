<?php 

    include 'db.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    

    $sql = "UPDATE `names` SET `name`='$name',`phone`='$phone' WHERE id = $id";

    $result = mysqli_query($con , $sql);

    if($result){
        header("location:index.php");
    }
