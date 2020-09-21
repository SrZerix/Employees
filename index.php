<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menú Principal</title>
        <link rel="stylesheet" href="./Assets/main.css">
    </head>
    <body>
      <header>
        <nav >
            <div id="boxes">
                <?php
                $pagina;?>
                <a class="linki" href="?pagina=View/ViewUpperEmployee"><span>Alta Empleados</a> </span><a class="linki" href="?pagina=Controller/ControlerGeneralList"><span>Lista General Empleados</a></span> <a class="linki" href="?pagina=View/ViewDeleteEmployee"><span>Dar de Baja Empleado</a> </span> <a class="linki" href="?pagina=Controller/ControlerFindDpt"><span>Lista Empleados Departamento</a></span>
            </div>
        </nav>    
            <div class="content">
                <?php if(isset($_GET['pagina'])){
             
              $file= './'.$_GET['pagina'].'.php';
             if(file_exists($file)){
               include($file);
             }
                  else 
                {echo "No existe la página.";}}
                else  {echo 'No se ha seleccionado ninguna página';}
               
            ?>
            </div>
            


    </header>
    </body>
</html>