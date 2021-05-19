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
    <form action="adddata.php" method="post">
        <div class="main">
            <label for="name">Name</label><br/>
            <input  type="text" name="name" id="name" required><br/>
            <label for="name">Number</label><br/>
            <input type="number" name="phone" id="phone" required><br/><br/>
            <input type = "submit" value = "save">

        </div>
    </form>
    <hr>
    <table class = "table">
    <tr>
    <th>Name</th>
    <th>Phone No.</th>
    <th>Actions</th>
    </tr>
    <?php
        include 'db.php';
        $sql = "SELECT * from names";

        $result = mysqli_query($con,$sql);

        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $name = $row['name'];
                $phone = $row['phone'];


                ?>
                <tr>
                    <td> <?php echo $name ?></td>
                    <td> <?php echo $phone ?></td>
                    <td><a href = "edit.php?id=<?php echo $id; ?>">Update</a>
                    <a href = "delete.php?id=<?php echo $id; ?>">Delete</a>
                    </td>
                </tr>

                <?php 
            }
        }
    ?>
    </table>
</body>
</html>