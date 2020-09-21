<?php

include_once __DIR__ . '/../DAO/DAOEmployee.php';

session_start();
try{
$NIF = $_REQUEST['nif'];
DAOEmployee::employeeDelete($NIF);
}catch(EmployeeException $EE){
    
    $_SESSION['code']=$EE->getCode();
    $_SESSION['site']=$EE->getSite();
    $_SESSION['message']=$EE->getMessage();
    header("Location: ../View/ViewErrorMessage.php");
    exit;
}
$_SESSION['message']="Se ha eliminado al empleado correctamente.";
header("Location:../View/ViewMessage.php");
