<?php include('./../inc/customerHeader.php'); 
    
    $user = $system->getCustomerInformation($_SESSION['email']);
?>

   <div class="show">
                <div class="profile">
                    <div class="cardHeader1">
                        <h2> Profile picture</h2>         
                    </div>
                       <table>
                          <thead>
                           
                            <div class="user1">
                                <img src="./../Images/imgs/customer02.jpg" alt="">
                            </div>
                            <div>
                                <p><strong>Name : </strong><?php echo $user["customer_name"];?></p>
                                <p><strong>Email : </strong><?php echo $user["customer_email"];?></p>
                                <p><strong>Student ID : </strong><?php echo $user["customer_id"];?></p>
                                <p><strong>Phone number : </strong><?php echo $user["customer_phone"];?></p>
                                <p><strong>Address : </strong><?php echo $user["customer_address"];?></p>
                            </div>
                            
                        </tbody>
                    </table>
                </div>

      <?php include('./../inc/customerFooter.php'); ?>