<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vista General</title>
        <link rel="stylesheet" href="../Assets/main.css">
    </head>
    <body>
        <?php
        $control=$_GET["control"];
        $row=$_GET["row"];
        
                if ($control==1){
                    echo "El empleado ha sido insertado. Se ha visto afectada ".$row." fila.";
                }
                
               if ($control==2){
                    echo "Algo ha fallado. No se puede mostar el listado.";
               }
               
               if ($control==-1){
                    echo "Algo no ha salido bien.";
               }
               
               if ($control==3){
                   echo "El empleado ha sido eliminado. Se ha visto afectada ".$row." fila.";
               }
               if ($control==4){
          
        ?>
        <div id="dptList">
            <table id="list2">
                <tr><td colspan="10" rowspan="1"> <h2 class="listHead"> Listado Empleados por Departamento </h2></td></tr>
                    <tr><td><strong> Código: </strong></td>
                    <td><strong> NIF: </strong></td>
                    <td><strong> Apellidos: </strong></td>
                    <td><strong> Nombre: </strong></td>
                    <td><strong> Profesión: </strong></td>
                    <td><strong> Salario: </strong></td>
                    <td><strong> Fecha de Nacimiento: </strong></td>
                    <td><strong> Fecha de Registro: </strong></td>
                </tr> 
        
             <?php 
               session_start();
               $objectList = $_SESSION['ArrayEmpDpt'];
              foreach ($objectList as $obj)
              {
                  
                  ?>
           
                <tr><td><strong><?php echo $obj->codigo; ?></strong></td>
                    <td><strong><?php echo $obj->nif; ?></strong></td>
                    <td><strong><?php echo $obj->apellidos; ?></strong></td>
                    <td><strong><?php echo $obj->nombre; ?></strong></td>
                    <td><strong><?php echo $obj->profesion; ?></strong></td>
                    <td><strong><?php echo $obj->salario; ?></strong></td>
                    <td><strong><?php echo $obj->fechaNac; ?></strong></td>
                    <td><strong><?php echo $obj->fechaIng; ?></strong></td>
                </tr>
            
                <?php
               }} ?>
             </table>
            </div>
        <a href="../index.php"> Volver al Inicio </a>
    </body>
</html>
