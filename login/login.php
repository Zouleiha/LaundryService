<?php
    include("../system.php");
    $system = System::getSystem();

    if(isset($_POST['login'])){
            $loginemail = $_POST['loginemail'];
            $loginpassword = $_POST['loginpassword'];

            if($system->isOkayLoginCredential($loginemail, $loginpassword)){
                if($system->isAdminCredential($loginemail, $loginpassword)){
                    $user = $system->getAdminInformation($loginemail);
                    if($user['admin_password'] === $loginpassword){
                        $system->setSessionEmail($loginemail);
                        $system->redirectToAdminHomePage();
                    }else{

                    }
                }else{
                    $user = $system->getCustomerInformation($loginemail);
                    if($user['customer_password'] === $loginpassword){
                        $system->setSessionEmail($loginemail);
                        $system->redirectToHomePage();
                    }else{
                        
                    }
                }
            }else{
                $system->showAlertMessage("Wrong email or password");
            }
    }

    if(isset($_POST['signup'])){
        $signupid = $_POST['signupid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $newpassword = $_POST['newpassword'];
        $confirmpassword = $_POST['confirmpassword'];
        $customer_address = $_POST['customer_address'];
        $customer_phone = $_POST['customer_phone'];

        // Check and filters for Signup
        if(filter_has_var(INPUT_POST, 'signupid') && filter_has_var(INPUT_POST, 'name') && filter_has_var(INPUT_POST, 'email') &&
        filter_has_var(INPUT_POST, 'newpassword') && filter_has_var(INPUT_POST, 'customer_address') &&
        filter_has_var(INPUT_POST, 'customer_phone') && filter_has_var(INPUT_POST, 'confirmpassword')){

            // Checking for duplicates before signing up
            if(!$system->isUserexists($email)){
                if ($newpassword === $confirmpassword){
                    $system->addCustomer($signupid, $name, $email, $newpassword, $customer_address, $customer_phone);
                    if($system->isUserexists($email)){
                        $system->showAlertMessage("Customer account has been created");
                        header('Location: index.php');
                    }else{
                        $system->showAlertMessage("Failed to create account");
                    }
                }else{
                    $system->showAlertMessage("Please confirm your password");
                }
            }else{
                $system->showAlertMessage("User already exists");
            }
        } else{
            $system->showAlertMessage("Enter all required fields");
        }
    }
?>