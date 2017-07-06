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
          
            $a = 10;  
          
            function trocaVal(&$b){          //passagem de valor por referência quando tem "&"
                $b += 50;
                return $b;
            }
            echo trocaVal($a);
            echo "<br>";
            echo trocaVal($a);
            echo "<br>";
            echo $a;
        ?>   
      </div>    
    </body>
</html>