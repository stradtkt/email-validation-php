<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email App</title>
</head>
<body>
    <?php  if(isset($_SESSION['error']) && $_SESSION['error'] == true) { ?>
        <p>Invalid Email</p>
    <?php } ?>
    <form action="process.php" method="post">
        <input type="text" name="email" placeholder="Email">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
