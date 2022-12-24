<?php
    include("../system.php");
    $system = System::getSystem();

    if(!$system->isSessionSet()){
        $system->redirectToLoginPage();
    }
    
    $e_id = $_GET["e_id"];

    if(isset($e_id)){
        $result = $system->getEmployeeInformation($e_id);
    
            $e_id = $result["employee_id"];
            $name = $result["employee_name"];
            $designation = $result["employee_designation"];
            $number = $result["employee_phone"];
            $address = $result["employee_address"];    
    }else{
        $system->redirectToPage("employees.php");
    }

    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../styles/customerStyles.css">
    <title> Employee - <?php echo $name;?> </title>
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
                <th>Employee ID</th>
                <td><?php echo $c_id ?></td>
            </tr>
            <tr>    
                <th>Designation</th>
                <td><?php echo $designation ?></td>
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