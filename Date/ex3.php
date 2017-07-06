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
            
            $dt = new datetime();

            $periodo = new dateinterval("P15D");

            echo $dt ->format("d/m/Y H:i:s");

            $dt->add($periodo);

            echo "<br>";
          
            echo $dt ->format("d/m/Y H:i:s");
          
        ?>   
      </div>    
    </body>
</html>