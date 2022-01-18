<?php
    include 'db.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM `names` WHERE id = $id";

    $result = mysqli_query($con,$sql);
    if($result){
        header("location:index.php");
    }

?>