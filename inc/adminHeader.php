<?php
    include("../system.php");
    $system = System::getSystem();

    if(!$system->isSessionSet()){
        $system->redirectToLoginPage();
    }

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="./../styles/adminStyles.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            
            <ul>
                <li>
                    <a href="http://localhost/LaundryService/admin/index.php">
                        <span class="icon">
                            <ion-icon name="aperture-outline"></ion-icon>
                        </span>
                        <span class="title">Laundry Service</span>
                    </a>
                </li>

                <li>
                    <a href="./../admin/index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
            
                <li>
                    <a href="./../admin/activities.php">
                        <span class="icon">
                            <ion-icon name="extension-puzzle-outline"></ion-icon>
                        </span>
                        <span class="title">Activities</span>
                    </a>
                </li>
            
                <li>
                    <a href="./../admin/customers.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title" >Customers</span>
                    </a>
                </li>

                <li>
                    <a href="./../admin/employees.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Employees</span>
                    </a>
                </li>

                </ul>
            
        </div>
