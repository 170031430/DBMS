<?php

include("../db.php");
session_start();

$username = $_POST['email_admin'];
$password = $_POST['password_admin'];

if ($_POST['email_admin']) {
    $sql = "SELECT username,password,id,fullname,contact,user_category from tbluser where username= :username";
    $stat = $conn->prepare($sql);
    $stat->bindValue(":username", $username);
    $stat->execute();

    $user = $stat->fetch(PDO::FETCH_ASSOC);

    /* print_r($user);
    echo($password);
    echo($user['password']); */

    if ($user) {
        $valid = $password === $user['password'] ? true : false;
        if ($valid) {
            if ($user['user_category'] == 1) {
                $_SESSION['admin_userId'] = $user['id'];
                header("Location: http://localhost/DBMS/admin_dashboard.php");
                exit();
            } else if ($user['user_category'] == 2) {
                $_SESSION['warden_userId'] = $user['id'];
                header("Location: http://localhost/DBMS/warden_dashboard.php");
                exit();
            } else if ($user['user_category'] == 3) {
                $_SESSION['user_userId'] = $user['id'];
                header("Location: http://localhost/DBMS/user_dashboard.php");
                exit();
            }
        } else {
            header("Location: http://localhost/DBMS/login.php");
            exit();
        }
    } else {
        header("Location: http://localhost/DBMS/login.php");
        exit();
    }
}
