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
          
            $pessoa = array(
                'nome'=>'Cleberson',
                'idade'=> 28
            );   
            foreach($pessoa as &$value){        //Valor de dentro do array passado por referência
                
                if(gettype($value)=== 'integer') $value += 10;
                
                echo $value.'<br>';  
            }      
            print_r($pessoa);
        ?>   
      </div>    
    </body>
</html>