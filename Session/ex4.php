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
            
            session_regenerate_id();
          
            echo session_id();
          
            var_dump($_SESSION);
        ?>   
      </div>    
    </body>
</html>