<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilo.css"/>
        <title>Cleberson PHP</title>
    </head>
    <body>
      <div>
        <pre>        
        <?php
            define("BANCO_DE_DADOS", [
                '124.0.0.1',
                'root',
                'password',
                'test'
            ]); 
            print_r(BANCO_DE_DADOS);    
        ?>   
        </pre>
      </div>    
    </body>
</html>