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
            function ola($texto = "mundo", $periodo = "Bom dia"){
                return "Olá $texto! $periodo! <br>";
            }    
            echo ola();
            echo ola("Boa noite!");
            echo ola("Cleber", "Boa tarde");
            echo ola("João","");
          
        ?>   
      </div>    
    </body>
</html>