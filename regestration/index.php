<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>regester php mysql</title>
</head>
<body>
    <div class="header">
        <h2>
            Home page 
        </h2>
    </div>
    <div class="content">
        <?php  if (isset($_SESSION['success'])):?>
            <div class="error success"></div>
             <h3>
                 <?php
                    echo $_SESSION['success'];
                    unset ($_SESSION['success']);
                 ?>

             </h3>
        <?php endif ?>

        <?php if  (isset($_SESSION["username"])):  ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p> <strong><?php echo $_SESSION['stater']; ?></strong></p>
            <p > <a href="index.php?logout='1'" style="color:red;">Logout</a> </p>
        <?php endif ?>
    </div>
</body>
</html>