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
            echo date("d/m/Y H:i:s");
            
            echo "<br>";  
          
            echo time();
          
            echo "<br>"; 
          
            //$ts = strtotime("2001-09-11");
            $ts = strtotime("now");
            //$ts = strtotime("day");
            //$ts = strtotime("+1 week");
            echo date("l, d/m/Y", $ts);
          
        ?>   
      </div>    
    </body>
</html>