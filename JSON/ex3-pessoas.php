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
            $pessoas = array();
            
            array_push($pessoas, array(
            'nome'=>'Joao',
            'idade'=>20
            ));
          
            array_push($pessoas, array(
            'nome'=>'Cleber',
            'idade'=>25
            ));
          
            echo json_encode($pessoas);
        ?>   
      </div>    
    </body>
</html>