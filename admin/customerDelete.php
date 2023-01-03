<?php
    include("../system.php");
    $system = System::getSystem();

    if(isset($_GET['email'])){
        $email = $_GET['email'];

        $sql = "delete from customers where customer_email='$email'";
        // $system->showAlertMessage("Press OK to delete");
        $system->executeQuery($sql);
        $system->redirectToPage("customers.php");
    }else{
		$system->redirectToPage("customers.php");
	}