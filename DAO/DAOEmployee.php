<?php


require_once __DIR__ . '/Connect.php';

include_once __DIR__ . '/../Model/Employee.php';

include_once __DIR__ . '/../Model/DepartamentException.php';

include_once __DIR__ . '/../Model/EmployeeException.php';

class DAOEmployee{
    
    function employeeInsert($employee){
        
       global $conexion;
        
       $code = $employee->getDptr(); $id=0;
       
       // prepara la consulta
       $sentencia = $conexion->prepare("SELECT id FROM departamento WHERE codigo = ?" );
           
           // asigna los valores
           $sentencia->bind_param("i",$code);
           
           // ejecuta la consulta
           $check=$sentencia->execute();
          
           
           // devuelve el resultado de la consulta
           $sentencia->store_result();
           
           // comprueba que has recibido una fila
            if($sentencia->num_rows == 1 && $check){
                
                // se prepara para vincular los resultados a las variables
                $sentencia->bind_result($id);
                
                // obtiene las variables vinculadas
                $sentencia->fetch();
                
                // asigna la variable para usarla mas tarde
                $endId=(int)$id;
                
                // cierra la consulta
                $sentencia->free_result();
                $sentencia->close();
           
            }else{
                    $menssage = $sentencia->error;
                    $errorN = $sentencia->errno;
               throw new DepartamentException($menssage,$errorN,"DAO:employeeInsert(),DPTO");
            }
           
 
       $codeE=$employee->getCode();
       $nif=$employee->getNIF();
       $surnames=$employee->getSurnames();
       $name=$employee->getName();
       $profession=$employee->getProfession();
       $salary=$employee->getSalary();
       $dateNac=$employee->getDateNac();
       $dateEntry=$employee->getDateEntry();
       
      // $sql = "INSERT INTO empleado VALUES(null,'$codeE','$nif','$surnames','$name','$profession','$salary','$dateNac','$dateEntry',$endId)";
       
       
       
//       if($conexion->query($sql)){
//           return $conexion->affected_rows;
//       }else{
//           return $conexion->error;
//       }
       
       $insert = $conexion->prepare("INSERT INTO empleado VALUES(null,?,?,?,?,?,?,?,?,?)");
       
       $insert->bind_param("iisssissi",$codeE,$nif,$surnames,$name,$profession,$salary,$dateNac,$dateEntry,$endId);
       
      if($insert->execute()){  
       return $insert->affected_rows;
      }else{
            $menssage = $insert->error;
                    $errorN = $insert->errno;
               throw new DepartamentException($menssage,$errorN,"DAO:employeeInsert(),INSERT");
      }
        
    }
    
    function generalList(){
        global $conexion;
        
      $sql = "SELECT e.codigo, e.nif, e.apellidos, e.nombre, e.profesion, e.salario, e.fechaNac, e.fechaIng, d.descripcion, d.localizacion FROM
                empleado e, departamento d WHERE e.idDepartamento = d.id";
      
      $result = $conexion->query($sql);
      
         if($result->num_rows > 0){
           $Obj=$result->fetch_object();
           
           while($Obj){
               $ArrayObjects[]=$Obj;
               $Obj=$result->fetch_object();
           }
           return $ArrayObjects;
                        }
        else{
            $menssage = $conexion->error;
                $errorN = $conexion->errno;
               throw new EmployeeException($menssage,$errorN,"DAO:generalList()");
            }
        }
        
      function employeeDelete($nif){
            
            global $conexion;
            
            $code=(int)$nif;
            
           $sql = $conexion-> prepare("DELETE FROM empleado WHERE nif = '$code'");
           
           $sql->bind_param("i",$code);
           
              // ejecuta la consulta
           $sql->execute(); 
          
           // comprueba que has recibido una fila
             if ($sql->affected_rows==1){ 
                $row=$sql->affected_rows;
                // cierra la consulta
                $sql->free_result();
            return $row;
            }else{
                $menssage = $sql->error;
                    $errorN = $sql->errno;
                        throw new EmployeeException($menssage,$errorN,"DAO:employeeDelete()");
            }
      }
      
     function findempdptr($id){
         
         global $conexion;
         
         $code = $id;
         
         $sql = $conexion->prepare("SELECT e.codigo, e.nif, e.apellidos, e.nombre, e.profesion, e.salario, e.fechaNac, e.fechaIng FROM
                empleado e, departamento d WHERE e.idDepartamento = d.id and d.id = ?");

         $sql->bind_param("i",$code);
         
               // ejecuta la consulta
           $sql->execute();
           
           // devuelve el resultado de la consulta
           $result=$sql->get_result();
                    
             if($result->num_rows > 0){                
           $Obj=$result->fetch_object();
           
           while($Obj){
               $ArrayObjects[]=$Obj;
               $Obj=$result->fetch_object();
           }
   
           return $ArrayObjects;
                        }else{
                             $menssage = $conexion->error;
                                $errorN = $conexion->errno;
                                    throw new EmployeeException($menssage,$errorN,"DAO:generalList()");
                        }
        }
         
}


