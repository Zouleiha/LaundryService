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
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="aperture-outline"></ion-icon>
                        </span>
                        <span class="title">Laundry Service</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="extension-puzzle-outline"></ion-icon>
                        </span>
                        <span class="title">Activities</span>
                    </a>
                </li>
            
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title" >Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Employees</span>
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
                    <img src="./../Images/imgs/customer01.jpg" alt="">
                </div>
                
            </div>



            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Date</td>
                                <td>Amount required</td>
                                <td>Amount paid</td>
                            </tr>
                        </thead>

                        <tbody>
                        
                        <?php
                            $result = $system->getTableContent('transactions');
                            $id = 0;

                            while($row = $result->fetch_assoc()){
                                $id = $id + 1;
                                $date_of_transaction = $row["date_of_transaction"];
                                $amount_required = $row["amount_required"];
                                $amount_paid = $row["amount_paid"];

                                echo "<tr>
                                        <td>$date_of_transaction</td>
                                        <td>$amount_required</td>
                                        <td>$amount_paid</td>
                                    </tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                   
                </div>

                <!-- ================= New Customers ================ -->
                
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="./../JS/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>