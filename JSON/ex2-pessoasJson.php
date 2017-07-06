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
            $json = '[{"nome":"Joao","idade":20},{"nome":"Cleber","idade":25}]';
            $data = json_decode($json, true);
            var_dump($data);
        ?>   
      </div>    
    </body>
</html>