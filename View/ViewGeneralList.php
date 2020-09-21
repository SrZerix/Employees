<!DOCTYPE html>
<html>
    <head>
        <title>Listado General Empleados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Assets/main.css"/>
    </head>
    <body>
        <div id="divList">
            <table id="list">
               <tr><td colspan="10" rowspan="1"> <h2 class="listHead"> Listado General Empleados </h2></td></tr>
               
               <tr><td><strong> Código: </strong></td>
                    <td><strong> NIF: </strong></td>
                    <td><strong> Apellidos: </strong></td>
                    <td><strong> Nombre: </strong></td>
                    <td><strong> Profesión: </strong></td>
                    <td><strong> Salario: </strong></td>
                    <td><strong> Fecha de Nacimiento: </strong></td>
                    <td><strong> Fecha de Registro: </strong></td>
                    <td><strong> Descripción Departamento: </strong>
                    </td><td><strong> Localización Departamento: </strong></td>
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
                    <td><strong><?php echo $obj->descripcion; ?></strong>
                    </td><td><strong><?php echo $obj->localizacion; ?></strong></td>
                </tr>
                <?php
              } ?>
                <tr> <a href="../index.php"> Volver al Inicio </a> </tr>
            </table>
        </div>
    </body>
</html>
