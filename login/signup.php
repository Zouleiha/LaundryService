<?php
    $userExists = 0;
    $success = 0;

    if(isset($_POST['signup'])){
        // Check and filters for Signup
        if(filter_has_var(INPUT_POST, 'signupid') &&
        filter_has_var(INPUT_POST, 'email') &&
        filter_has_var(INPUT_POST, 'newpassword') &&
        filter_has_var(INPUT_POST, 'confirmpassword')){

            $signupid = mysqli_real_escape_string($conn, $_POST['signupid']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $newpassword = mysqli_real_escape_string($conn, $_POST['newpassword']);
            $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
            $customer_address = mysqli_real_escape_string($conn, $_POST['customer_address']);
            $customer_phone = mysqli_real_escape_string($conn, $_POST['customer_phone']);

            // Checking for duplicates before signing up
            $query = "SELECT * FROM customers WHERE customer_id=$signupid";
            $result = mysqli_query($conn, $query);
            if($result){
                $numberOfRows = mysqli_num_rows($result);
                if($numberOfRows>0){
                    // User exists already
                    $userExists = 1;
                }
            }

            if ($newpassword === $confirmpassword) {
                $query = "INSERT INTO customers(customer_id, customer_email, customer_password, customer_address, customer_phone) 
                VALUES('$signupid', '$email', '$confirmpassword', '$customer_address', '$customer_phone')";
                if(mysqli_query($conn, $query)){
                    // Signup successful
                    $success = 1;
                    header('Location: index.php');
                } else{
                    // signup error message
                    
                }
            } else{
                // Show password error message

            }

            
        }
    }
?>