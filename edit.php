<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact App</title>
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body class="body">
    <header class="heading">
        <h1>SAVE YOUR CONTACTS HERE</h1>
    </header>

    <?php
    include 'db.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM names WHERE id = " . $id;

    $result = mysqli_query($con, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $contactname = $row['name'];
        $phone = $row['phone'];
    }
    ?>


    <form action="update.php" method="post">
        <div class="main">
            <div class="row">
                <div class="name">
                    <label class="label" for="name">Name:</label><br />
                </div>
                <div class="number">
                    <input class="input" type="text" name="name" id="name" value=<?php global $contactname;echo $contactname ?> placeholder="name" required><br />
                </div>
            </div>
            <div class="row">
                <div class="name">
                    <label class="label" for="number">Mobile Number:</label><br />
                </div>
                <div class="number">
                    <input class="input" type="number" name="phone" id="phone" placeholder="number" value=<?php global $phone;echo $phone ?> required><br />
                </div>
            </div>
            <input type="hidden" name="id" id="id" value=<?php global $id;echo $id ?> required>
            <div class="button">
                <button class="save">UPDATE</button>
            </div>

        </div>
    </form>
</body>

</html>
