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
                
                $args = func_get_args();
                
                return $args;
            }
            var_dump(ola("Bom dia", 10));

        ?>   
      </div>    
    </body>
</html>