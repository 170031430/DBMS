<?php

include("../db.php");
session_start();

$warden_id = ($_SESSION['warden_userId']);
/* print_r(($_POST)); */
if($warden_id){
    $name = $_POST['name'];
    $id = $_POST['id_no'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $floor = $_POST['floor'];
    $room = $_POST['room'];
    
    $sql = "INSERT into tblstudent (rollno,fullname,gender,email,floor,room,encodedby) 
            VALUES ('$id','$name','$gender','$email','$floor','$room','$warden_id')";
    $stat = $conn->prepare($sql);
    /* $stat->bindValue(":username", $username); */
    $stat->execute();
    header("Location: http://localhost/DBMS/warden_dashboard.php");
    exit();
}

else{
    header("Location: http://localhost/DBMS/login.php");
    exit();
}

?>