<?php 

    $name = $_POST['name'];
    $phone = $_POST['phone'];


    echo "Name is " .$name ."phone Number is: " .$phone;


    include 'db.php';

    $sql = "INSERT INTO `names`(`name`, `phone`) VALUES ('$name','$phone')";

    $result = mysqli_query($con , $sql);

    if($result){
        header("Location:index.php");
    }
?>