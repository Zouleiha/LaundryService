<?php
    include("../system.php");
    $system = System::getSystem();

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $designation = $_POST['designation'];
        $address = $_POST['address'];
        $number = $_POST['number'];

        // Check and filters for Signup
        if(filter_has_var(INPUT_POST, 'name') && filter_has_var(INPUT_POST, 'designation') &&
         filter_has_var(INPUT_POST, 'address') && filter_has_var(INPUT_POST, 'number')){

            // Checking for duplicates before signing up
            // if(!$system->isUserexists($email)){
                $system->addEmployee($name, $designation, $address, $number);
                header('Location: employees.php');
            // }else{
                // $system->showAlertMessage("User already exists");
            // }
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
    <title> Add Employee</title>
</head>
<body>
    <header> 
        <h2></h2>
       <div class="center-text">
        <form class="form" action="employeeAdd.php" method="post" >
        
            <input type="text" name="name" placeholder="Name" id="username">
            <input list="Designation" type="text" name="designation" placeholder="Designation" id="Designation">
            <datalist id="Designation">
                <option value="delivery man">
                <option value="laundry man">
                <option value="supervisor">
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