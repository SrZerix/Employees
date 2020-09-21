<?php

$code=$_REQUEST['code'];
$nif=$_REQUEST['nif'];
$surnames=$_REQUEST['surnames'];
$name=$_REQUEST['name'];
$profession=$_REQUEST['profession'];
$salary=$_REQUEST['salary'];
$dateNac=$_REQUEST['dateNac'];
$dateEntry=$_REQUEST['dateEntry'];
$dptr=$_REQUEST['dptr'];

include_once __DIR__ . '/../Model/Employee.php';

$employee = new Employee($code,$nif,$surnames,$name,$profession,$salary,$dateNac,$dateEntry,$dptr);

include_once __DIR__ . '/../DAO/DAOEmployee.php';

try {
$row = DAOEmployee::employeeInsert($employee);}
catch(DepartamentException $DE){
    session_start();
    $_SESSION['code']=$DE->getCode();
    $_SESSION['site']=$DE->getSite();
    $_SESSION['message']=$DE->getMessage();
    header("Location:../View/ViewErrorMessage.php");
    exit;
}
session_start();
$_SESSION['message']="El empleado ha sido de alta correctamente.";
header("Location:../View/ViewMessage.php");

