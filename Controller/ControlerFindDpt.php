<?php

include_once __DIR__.'/../DAO/DAODepartament.php';

    session_start();
    $ArrayEmpDpt = DAODepartament::findDepartaments();
    $_SESSION['List']=$ArrayEmpDpt;
    
    
     header("Location: /ProyectoEmpleados/?pagina=View/ViewFindEmpDptr");