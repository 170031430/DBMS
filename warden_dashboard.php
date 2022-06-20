<?php

include("./db.php");

session_start();

$warden = ($_SESSION['warden_userId']);
if ($warden) {
    $warden_details = "SELECT username,fullname,contact from tbluser where id= :id";
    $stat = $conn->prepare($warden_details);
    $stat->bindValue(":id", $warden);
    $stat->execute();

    $user = $stat->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location: http://localhost/DBMS/login.php");
    exit();
}

/* print_r($user); */


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warden page</title>
    <link rel="stylesheet" href="./css/warden.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 header">
                <div class="username">
                    <?php echo ($user['fullname']) ?>
                </div>
                <div class="drop-area">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Quick access
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="./register.php">Register Users</a></li>
                            <li><a class="dropdown-item" href="#">Approvals</a></li>
                            <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>