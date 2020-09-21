<?php

require_once __DIR__ . '/Connect.php';

class DAODepartament{
    
    function findDepartaments(){
        
        global $conexion;
        
        $sql = "SELECT id,descripcion FROM departamento";
        
        $result = $conexion->query($sql);
       
       if($result->num_rows > 0){
          
           
           while($Obj = $result->fetch_object()){
               
               $ArrayObjects[] = $Obj;
               
           }
          
           return $ArrayObjects;
                        }
        }
    
    
    
}