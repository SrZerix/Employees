<?php

include_once __DIR__ . '/../DAO/DAOEmployee.php';

include_once __DIR__ . '/../Model/EmployeeException.php';

session_start();
try{
    $ArrayEmpDpt = DAOEmployee::generalList(); 
}catch(EmployeeException $EE){
    $_SESSION['code']=$EE->getCode();
    $_SESSION['site']=$EE->getSite();
    $_SESSION['message']=$EE->getMessage();
    header("Location: View/ViewErrorMessage.php");
    exit;
}
 $_SESSION['ArrayEmpDpt'] = $ArrayEmpDpt;
  header("Location: View/ViewGeneralList.php");

