<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Contact App</title>
</head>

<body>
    <div class="main-page">
        <header class="header">SAVE YOUR CONTACTS HERE</header>
        <form action="adddata.php" method="POST" class="form">
            <div class="flex">
                <label for="label-name" class="name fs-25">Name</label>
                <input type="text" id="label-name" name="name" required/>
            </div>
            <div class="flex">
                <label for="label-phone" class="phone fs-25">Phone Number</label>
                <input type="number" id="label-phone" name="phone" required/>
            </div>
            <button class="button">Add</button>
        </form>
        <div class="all-contacts">
            <table class = "table">
                <tr>
                    <th>NAME</th>
                    <th>PHONE NUMBER</th>
                    <th>ACTION</th>
                </tr>

                <?php
                include 'db.php';

                $sql = "SELECT * FROM names";

                $result = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $phone =  $row['phone'];

                ?>
                    <tr>
                        <td><?php echo $name ?></td>
                        <td><?php echo $phone ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $id;  ?>"><i class="fas fa-edit"></i></a>
                            <a href="delete.php?id=<?php echo $id; ?>"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    <?php } ?>
            </table>
    
        </div>        
    </div>
</body>

</html>