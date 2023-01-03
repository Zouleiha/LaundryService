<?php
    include("../system.php");
    $system = System::getSystem();

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "delete from employees where employee_id=$id";
        // $system->showAlertMessage("Press OK to delete");
        $system->executeQuery($sql);
        $system->redirectToPage("employees.php");
    }else{
		$system->redirectToPage("employees.php");
	}