<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact App</title>
    <link rel = "stylesheet" href = "style.css">
    <style>
.table th , td{
    border:1px solid black;
    padding:10px;
}
    </style>
</head>
<body class = "body">
    <header class = "heading">
        <h1>Contact App </h1>
    </header>   

    <?php 
        include 'db.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM names WHERE id = ".$id;

        $result = mysqli_query($con,$sql);

        if($result){
            $row = mysqli_fetch_assoc($result);
            $contactname = $row['name'];
            $phone = $row['phone'];
        }
    ?>


    <form action="update.php" method="post">
        <div class="main">
            <label for="name">Name</label><br/>
            <input  type="text" name="name" id="name" value = <?php global $contactname;echo $contactname?> required><br/>
            <label for="name">Number</label><br/>
            <input type="number" name="phone" id="phone" value = <?php global $phone;echo $phone?> required><br/><br/>
            <input  type="hidden" name="id" id="id" value = <?php global $id;echo $id?> required>
            <input type = "submit" value = "update">

        </div>
    </form>
</body>
</html>