<?php include("./../inc/adminHeader.php"); ?>

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

                <table>
                    <caption><font size="9"><b>Customers</b></font></caption>
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    
                    <?php
                        $result = $system->getTableContent('customers');
                        $id = 0;

                        while($row = $result->fetch_assoc()){
                            $id = $id + 1;
                            $c_id = $row["customer_id"];
                            $name = $row["customer_name"];
                            $email = $row["customer_email"];
                            $number = $row["customer_phone"];
                            $address = $row["customer_address"];

                            echo "<a href=\"customerDetails.php?customerID=$c_id\"><tr>
                                    <td>$id</td>
                                    <td>$c_id</td>
                                    <td>$name</td>
                                    <td>$email</td>
                                    <td>$number</td>
                                    <td>$address</td>
                                    <td>
                                        <a class='btn btn-danger btn-sm' href = 'customerDetails.php?email=$email'>See more</a>
                                        <a class='btn btn-primary btn-sm' href = 'customerUpdate.php?email=$email'>Update</a>
                                        <a class='btn btn-primary btn-sm' href = 'customerDelete.php?email=$email'>Delete</a>
                                    </td>
                                </tr></a>";
                        }
                    ?>
                    </tbody>
                </table>

                <button><a href="customerAdd.php">Add customer</a></button>
                   
                </div>

                <!-- ================= New Customers ================ -->
                
            </div>
        </div>

        <?php include("./../inc/adminFooter.php"); ?>

