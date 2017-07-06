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
          
            function test($callback){
                //processo lento
                $callback();
            }
            test(function(){
                echo "Terminou";
            });
          
        ?>   
      </div>    
    </body>
</html>