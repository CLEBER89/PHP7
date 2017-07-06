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
            setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
          
            echo ucwords(strftime("%A %B"));
          
        ?>   
      </div>    
    </body>
</html>