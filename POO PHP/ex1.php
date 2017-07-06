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
            
            class Pessoa {
                
                public $nome;//Atributo
                
                public function falar(){  // Método
                    
                    return "O Meu nome é ".$this->nome;
                }
            }
          
        $cleber = new Pessoa();
        $cleber->nome = "Cleberson Correia";
        echo $cleber->falar();  
          
        ?>   
      </div>    
    </body>
</html>