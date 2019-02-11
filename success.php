<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <h1><?= $_SESSION['email'] ?></h1>
    <h2>Emails Entered</h2>
    <?php foreach($_SESSION['all_emails'] as $email) { ?>
        <p><?= $email['email'] ?> <?= $email['created_at'] ?></p>
    <?php } ?>
</body>
</html>