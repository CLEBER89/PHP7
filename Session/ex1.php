<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilo.css"/>
        <title>Cleberson PHP</title>
    </head>
    <body>
      <div>
        <?php
            //session_start();
            require_once("config.php");    
          
            $_SESSION["nome"] = "Cleberson";
        ?>   
      </div>    
    </body>
</html>