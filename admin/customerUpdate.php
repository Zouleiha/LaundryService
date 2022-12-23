<?php
    include("../system.php");
    $system = System::getSystem();

    $email = $_GET["email"];

    if(isset($email)){
        $result = $system->getCustomerInformation($email);
    
            $c_id = $result["customer_id"];
            $c_name = $result["customer_name"];
            $c_email = $result["customer_email"];
            $c_number = $result["customer_phone"];
            $c_address = $result["customer_address"];    
    }else{
        $system->redirectToPage("customers.php");
    }

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
            if($_GET['email'] == $_POST['email']){
                    $system->updateCustomer($id, $name, $email, $password, $address, $number);
                    if($system->isUserexists($email)){
                        $system->showAlertMessage("Customer account has been created");
                        header('Location: index.php');
                    }else{
                        $system->showAlertMessage("Failed to create account");
                    }
            }else{
                $system->showAlertMessage("Invalid Email");
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
        <form class="form" action="customerAdd.php" method="post" >
        
            <input type="text" name="name" value=<?php echo $c_name ?> placeholder="Name" id="username">
            <input type="id" name="id" value=<?php echo $c_id ?> placeholder="ID" id="Id">
            <input type="email" name="email" value=<?php echo $c_email ?> placeholder="Email" id="email">
            <input type="number" name="password" placeholder="Password" id="password">
            <input type="phone" name="number" value=<?php echo $c_number ?> placeholder="Phone number" id="phone">
            <input type="address" name="address" value=<?php echo $c_address ?> placeholder="Address" id="address">
            <input type="submit" value="Submit" name="submit">                 
        </form>
       </div>
    </header>
    <script src="JS/main.js"></script>
</body>
</html>