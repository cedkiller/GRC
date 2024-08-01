<?php
include('../conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRC Examination</title>
    <link rel="stylesheet" href="../professor/css/style2.css">
    <link rel="icon" href="../img/new3.png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/75fe70a6d6.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- header -->
    <div class="header">
        <div class="icon-container">
            <i class="fa-solid fa-bars icon" id="bar-icon"></i>
            <i class="fa-solid fa-x icon" id="x-icon" style="display: none;"></i>
        </div>

        <div class="logo-container">
            <img src="../img/LOGO_ORIGINAL-removebg-preview.png" alt="" class="img">
        </div>

        <div class="dropdown">
            <button class="dropbtn"><?php echo $_SESSION['prof_name'];?></button>
            <div class="dropdown-content">
                <a href="#">Professor Profile</a>
                <a href="./logout.php">Logout</a>
            </div>
        </div>
    </div>
