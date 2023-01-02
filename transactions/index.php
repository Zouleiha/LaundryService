<?php include('./../inc/customerHeader.php'); 
    
    $user = $system->getCustomerInformation($_SESSION['email']);
?>

            <div class="show">
                <div class="profile">
                    <div class="cardHeader1">
                        <h2> Transaction Details </h2>
                </div>

                   
                    <table>
                            <thead>
                                <tr>
                                    <td> ID </td>                                    
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
                                            <td>$id</td>
                                            <td>$date_of_transaction</td>
                                            <td>$amount_required</td>
                                            <td>$amount_paid</td>
                                        </tr>";
                                }
                            ?>
                            </tbody>
                        </table> 
                     </div>
                </div>   
          </div>
    
      <?php include('./../inc/customerFooter.php'); ?>