<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Empleados a partir de Departamento</title>
    </head>
    <body>
        <?php
            session_start();
           $ArrayEmpDpt=$_SESSION['List'];     
        ?>
        <div class="content">
            <form id="delete" action="./Controller/ControlerFindEmpDptr.php">
                <label>Selecciona el departamento que deseas.</label>
                <select name="dptr">
                  <?php
                  foreach($ArrayEmpDpt as $obj){
                 
                    ?> 
                    <option value="<?= $obj->id; ?>" > <?= $obj->descripcion; ?> </option>
                    <?php
                  }
                  
                  ?>  
                  
                </select>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </body>
</html>
