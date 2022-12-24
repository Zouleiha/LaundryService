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
                    <caption><font size="9"><b>Orders</b></font></caption>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Order ID</th>
                            <th>Customer ID</th>
                            <th>Number of items</th>
                            <th>Items list</th>
                            <th>Employee assigned</th>
                            <th>Employee ID</th>
                        </tr>
                    </thead>

                    <tbody>
                    
                    <?php
                        $result = $system->getTableContent('orders');
                        $id = 0;

                        while($row = $result->fetch_assoc()){
                            $id = $id + 1;
                            $o_id = $row["order_id"];
                            $c_id = $row["customer_id"];
                            $number = $row["number_of_items"];
                            $list = $row["items_list"];
                            $e_assigned = $row["employee_assigned"];
                            $e_id = $row["employee_id"];

                            echo "<a href=\"customerDetails.php?customerID=$c_id\"><tr>
                                    <td>$id</td>
                                    <td>$o_id</td>
                                    <td>$c_id</td>
                                    <td>$number</td>
                                    <td>$list</td>
                                    <td>$e_assigned</td>
                                    <td>$e_id</td>
                                    
                                </tr></a>";
                        }
                    ?>
                    </tbody>
                </table>
                   
                </div>

                <!-- ================= New Customers ================ -->
                
            </div>
        </div>

        <?php include("./../inc/adminFooter.php"); ?>