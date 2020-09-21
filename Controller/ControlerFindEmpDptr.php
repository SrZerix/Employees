<?php

include_once __DIR__ . '/../DAO/DAOEmployee.php';


session_start();

try{
    $id = $_REQUEST['dptr'];
    $ArrayEmpDpt = DAOEmployee::findempdptr($id);  
}catch(EmployeeException $EE) {
    $_SESSION['code']=$EE->getCode();
    $_SESSION['site']=$EE->getSite();
    $_SESSION['message']=$EE->getMessage();
    header("Location: ../View/ViewErrorMessage.php");
    exit;
}
        $_SESSION['ArrayEmpDpt'] = $ArrayEmpDpt;  
    header("Location: ../View/ViewGeneral.php?control=4&row=0");


