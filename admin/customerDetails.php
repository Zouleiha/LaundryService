<?php
    include("../system.php");
    $system = System::getSystem();

    if(!$system->isSessionSet()){
        $system->redirectToLoginPage();
    }
    
    $email = $_GET["email"];

    if(isset($email)){
        $result = $system->getCustomerInformation($email);
    
            $c_id = $result["customer_id"];
            $name = $result["customer_name"];
            $email = $result["customer_email"];
            $number = $result["customer_phone"];
            $address = $result["customer_address"];    
    }else{
        $system->redirectToPage("customers.php");
    }

    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../styles/customerStyles.css">
    <title> Customer - <?php echo $name;?> </title>
</head>
<body>
    <header> 
       <div class="center-text">
        <table>
            <tr>
                <th>Name</th>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <th>Student ID</th>
                <td><?php echo $c_id ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <th>Phone number</th>
                <td><?php echo $number ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $address ?></td>
            </tr>
        </table>
       </div>
       </table>
    </header>
    <script src="./../JS/main.js"></script>
</body>
</html>