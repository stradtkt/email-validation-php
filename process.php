<?php 
session_start();
require_once('connection.php');


if(isset($_POST['email'])) {
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = true;
        header('location: /');
        die();
    } else {
        $query = "INSERT INTO emails (email, created_at, updated_at) VALUES ('{$_POST["email"]}', NOW(), NOW())";
        $last_row_id = run_mysql_query($query);
        if($last_row_id > 0) {
            //worked
            $_SESSION['email'] = $_POST['email'];
            $query = "SELECT * FROM emails ORDER BY id DESC";
            $all_emails = fetch_all($query);
            $_SESSION['all_emails'] = $all_emails;
            header('location: success.php');
            die();
        } else {
            //failed
            die("the insert query failed");
        }
    }
}




?>