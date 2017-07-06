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
          
            $fn = function($a){
                
            var_dump($a);
             
            };
            $fn("Oi");
        ?>   
      </div>    
    </body>
</html>