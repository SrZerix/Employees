<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Error </title>
        <link rel="stylesheet" href="../Assets/main.css">
    </head>
    <body>
        <?php
        session_start(); 
        ?>
         <div class="content">
            <div id="ret" style="background-color: red">
                <span><h2>ERROR</h2></span>
                <div style="background-color:beige; padding: 20px">
                    <p> El código de error es: <?php echo $_SESSION['code']; ?> </p>
                    <p> El error ha sido en <?php echo $_SESSION['site']; ?>.</p>
                    <p> <?php 
                    if($_SESSION['message']!=""){
                    echo $_SESSION['message']; 
                    }else{
                        echo "Upsss. Algo ha fallado.";
                    }            
                    ?></p>
                  <a href="../index.php" style="color:blue"> Volver al inicio...</a>
                </div>
                
            </div>    

        </div>
    </body>
</html>
