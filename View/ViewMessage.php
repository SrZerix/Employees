<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vista Correcto</title>
          <link rel="stylesheet" href="../Assets/main.css">
    </head>
    <body>
        <?php 
        session_start();
        $error=$_SESSION['message']?>
        <div class="content">
            <div id="ret" style="background-color: greenyellow">
                <span><h2>CORRECTO</h2></span>
                <div style="background-color:beige; padding: 20px">
                    <p> <?php echo $error; ?></p>
                  <a href="../index.php" style="color:blue"> Volver al inicio...</a>
                </div>         
            </div>    
        </div>
    </body>
</html>
