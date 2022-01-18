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

        <?php
        include 'db.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM names WHERE id = " . $id;

        $result = mysqli_query($con, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            $phone = $row['phone'];
        }
        ?>
        <form action="update.php" method="POST" class="form">
            <div class="flex">
                <label for="label-name" class="name fs-25">Name</label>
                <input type="text" id="label-name" name = "name" value= "<?php echo $name; ?>" required />
            </div>
            <div class="flex">
                <label for="label-phone" class="phone fs-25">Phone Number</label> 
                <input type="number" id="label-phone" name = "phone" value="<?php echo $phone; ?>" required />
            </div>
            <input type="hidden" name="id" id="id" value=<?php global $id;echo $id ?> required>
            <button class="button">Update</button>
        </form>
    </div>
</body>

</html>