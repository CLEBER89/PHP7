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
            //session_start();
            require_once("config.php");  
            
            //session_unset($_SESSION['nome']);   Apaga o nome..Sem variável apaga todas..
          
            //session_destroy();                  Limpa variável e remove o usuário
            
            echo $_SESSION['nome'];
        ?>   
      </div>    
    </body>
</html>