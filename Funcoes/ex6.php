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
            
            function soma(float ...$val):float {
                return array_sum($val);
            }
            echo var_dump(soma(2, 2));
            echo "<br>";
            echo soma(25, 33);
            echo "<br>";
            echo soma(1.5, 3.2);
            echo "<br>";
                
        ?>   
      </div>    
    </body>
</html>