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
          
            function ola(){
                return "Olá mundo!<br>";
            }
          
        echo ola();
        $frase = ola();
        
        echo strlen($frase);  
        
        ?>   
      </div>    
    </body>
</html>