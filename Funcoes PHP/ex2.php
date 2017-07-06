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
          
            function salario(){
                return 946.00;
            }
            echo"Cleberson recebeu 3 salários: R$".(salario()*3);
        ?>   
      </div>    
    </body>
</html>