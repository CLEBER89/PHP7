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
            require_once("config.php");
            
            echo session_id();
        ?>   
      </div>    
    </body>
</html>