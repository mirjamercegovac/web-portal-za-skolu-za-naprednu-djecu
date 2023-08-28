<?php

    include('include/connection.php');
    session_start();
    $userid = $_SESSION['userid'];
    
    if(!isset($_SESSION['user_username'])){
        header('location:login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web portal za školu za naprednu djecu</title>
    <!-- favicon -->
    <link rel="icon" href="slike/icon.png">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <!-- swiper css link -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- custom css links -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/quiz.css">
  <style>
    .update-profile{
        margin-top: 10%;
    }
  </style>
</head>
<body>


    <!-- Navigation start -->
    <header class="header">

        <div id="menu" class="fas fa-bars"></div>
        <a href="index.php" class="logo"><img src="slike/logo2.png" alt=""><p>ŠND</p></a>

        <nav class="navbar">
            <a href="quiz.php?n=1">Anketa</a>
        </nav>

        <img src="slike/default-avatar.jpg" class="user-pic" onclick="toggleMenu()">
        <div class="profile-menu" id="profileMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img src="slike/default-avatar.jpg">
                    <h3> <?php echo $_SESSION['user_username']; ?></h3>
                </div>
                <hr>
                <a href="logout.php" id="logout" class="sub-menu-link">
                    <i class="fas fa-sign-out-alt"></i>
                    <p>Odjavi se</p>
                </a>
            </div>
        </div>
        
    </header>
    <!-- Navigation end -->
    
    <?php
        include("profile.php");
    ?>
   

    

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- custom js links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
