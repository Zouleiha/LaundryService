<?php
    include("../system.php");
    $system = System::getSystem();

    if(!$system->isSessionSet()){
        $system->redirectToLoginPage();
    }
    echo "Welcome User";
    ?>
 <?php include('./../inc/customerHeader.php'); ?>



<?php include('./../inc/customerFooter.php'); ?>
