<?php
    include("../system.php");
    $system = System::getSystem();

    if(isset($_GET['email'])){
        $email = $_GET["email"];
        $result = $system->getCustomerInformation($email);
    
            $c_id = $result["customer_id"];
            $c_name = $result["customer_name"];
            $c_email = $result["customer_email"];
            $c_number = $result["customer_phone"];
            $c_password = $result["customer_password"];
            $c_address = $result["customer_address"];
    }else{
        $system->redirectToPage("customers.php");
    }
            
            if(isset($_POST['submit'])){
                $p_name = $_POST['name'];
                $p_id = $_POST['id'];
                $p_email = $_POST['email'];
                $p_password = $_POST['password'];
                $p_address = $_POST['address'];
                $p_number = $_POST['number'];
        
                    // Checking for correct password
                    // if($c_password == $p_password){
                            $system->updateCustomer($p_id, $p_name, $p_email, $p_password, $p_address, $p_number);
                            // $system->showAlertMessage("Updated successfully");
                            $system->redirectToPage("customers.php");
                    // }else{
                    //     $system->showAlertMessage("Wrong password");
                    // }
            }

    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/customerStyles.css">
    <title> Update Customer</title>
</head>
<body>
    <header> 
        <h2></h2>
       <div class="center-text">
        <form class="form" action="customerUpdate.php" method="post" >
        
            <input type="text" name="name" value=<?php echo $c_name ?> placeholder="Name" id="name" required>
            <input type="id" name="id" value=<?php echo $c_id ?> placeholder="ID" id="id" required>
            <input type="email" name="email" value=<?php echo $c_email ?> placeholder="Email" id="email" required>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="phone" name="number" value=<?php echo $c_number ?> placeholder="Phone number" id="phone" required>
            <input type="address" name="address" value=<?php echo $c_address ?> placeholder="Address" id="address" required>
            <input type="submit" value="Submit" name="submit">                 
        </form>
       </div>
    </header>
    <script src="./../JS/main.js"></script>
</body>
</html>