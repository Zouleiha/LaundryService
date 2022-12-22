<?php
    include("../system.php");
    $system = System::getSystem();

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $number = $_POST['number'];

        // Check and filters for Signup
        if(filter_has_var(INPUT_POST, 'name') && filter_has_var(INPUT_POST, 'id') && filter_has_var(INPUT_POST, 'email') &&
        filter_has_var(INPUT_POST, 'password') && filter_has_var(INPUT_POST, 'address') &&
        filter_has_var(INPUT_POST, 'number')){

            // Checking for duplicates before signing up
            if(!$system->isUserexists($email)){
                    $system->addCustomer($id, $name, $email, $password, $address, $number);
                    if($system->isUserexists($email)){
                        $system->showAlertMessage("Customer account has been created");
                        header('Location: index.php');
                    }else{
                        $system->showAlertMessage("Failed to create account");
                    }
            }else{
                $system->showAlertMessage("User already exists");
            }
        } else{
            $system->showAlertMessage("Enter all required fields");
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/customerStyles.css">
    <title> Add Customer</title>
</head>
<body>
    <header> 
        <h2></h2>
       <div class="center-text">
        <form class="form" action="employeeAdd.php" method="post" >
        
            <input type="text" name="name" placeholder="Name" id="username">
            <input list="Designation" type="text" name="designation" placeholder="Designation" id="Designation">
            <datalist id="Designation">
                <option value="Delivery man">
                <option value="laundry man">
                <option value="Supervisor">
            </datalist>
            <input type="phone" name="number" placeholder="Phone number" id="phone">
            <input type="address" name="address" placeholder="Address" id="address">
            <input type="submit" value="Submit" name="submit">                 
        </form>
       </div>
    </header>
    <script src="JS/main.js"></script>
</body>
</html>