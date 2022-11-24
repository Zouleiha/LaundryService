<?php
    // Connection to database
    require('./../config/config.php');
    require('./../config/db.php');
    require('./../config/session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IUT Laundry Service</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="./../styles/CuLandstyle.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
           
            <ul>     
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="aperture-outline"></ion-icon>
                        </span>
                        <span class="title">Laundry Service</span>
                    </a>
                </li>

                <h2> Customer Page Details</h2>
                
                <li>
                    <a href="./../Profile/index.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="./../Usage/index.php">
                        <span class="icon">
                            <ion-icon name="bus-outline"></ion-icon>
                        </span>
                        <span class="title">Usage</span>
                    </a>
                </li>

                <li>
                    <a href="./../Subscription/index.php">
                        <span class="icon">
                            <ion-icon name="notifications-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Subscription</span>
                    </a>
                </li>

                <li>
                    <a href="./../Transactions/index.php">
                        <span class="icon">
                            <ion-icon name="cash-outline"></ion-icon>
                        </span>
                        <span class="title">Transactions</span>
                    </a>
                </li>
             </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user"> 
                    <img src="./../Images/imgs/customer02.jpg" alt="">  
              </div>
            </div>