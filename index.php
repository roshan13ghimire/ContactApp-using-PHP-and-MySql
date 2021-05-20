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
    <form action="adddata.php" method="post">
        <div class="main">
            <div class="row">
                <div class="name">
                    <label class="label" for="name">Name:</label><br />
                </div>
                <div class="number">
                    <input class="input" type="text" name="name" id="name" placeholder="name" required><br />
                </div>
            </div>
            <div class="row">
                <div class="name">
                    <label class="label" for="number">Mobile Number:</label><br />
                </div>
                <div class="number">
                    <input class="input" type="number" name="phone" id="phone" placeholder="number" required><br />
                </div>
            </div>
            <div class="button">
                <button class="save">SAVE</button>
            </div>

        </div>
    </form>
    <hr>
    <div class="data">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Phone No.</th>
                <th>Actions</th>
            </tr>
            <?php
            include 'db.php';
            $sql = "SELECT * from names";

            $result = mysqli_query($con, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $phone = $row['phone'];


            ?>
                    <tr>
                        <td> <?php echo $name ?></td>
                        <td> <?php echo $phone ?></td>
                        <td><a href="edit.php?id=<?php echo $id; ?>">Update</a>
                            <a href="delete.php?id=<?php echo $id; ?>">Delete</a>
                        </td>
                    </tr>

            <?php
                }
            }
            ?>
        </table>
    </div>
</body>

</html>
