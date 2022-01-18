<?php
    include "db.php";

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    
    $sql = "INSERT INTO `names`(`name`, `phone`) VALUES ('$name','$phone')";

    $result = mysqli_query($con,$sql);
    if($result)
    {
    // echo "Inserted";
    header("Location:index.php");
    }
    else
    echo "Not Inserted";
?>