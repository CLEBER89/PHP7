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

            function __autoload($nomeClasse){
                  require_once("$nomeClasse.php");
            }

            $carro = new DelRey();
            $carro->acelerar(80);
        ?>   
      </div>    
    </body>
</html>