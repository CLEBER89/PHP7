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
            
            class Endereco{

                private $logradouro;
                private $numero;
                private $cidade;
            
            public function __construct($a, $b, $c){
                $this->logradouro = $a;
                $this->numero = $b;
                $this->cidade = $c;

            }

            public function __destruct(){
                //var_dump("DESTRUIR");        
            }

            public function __toString(){
                return $this->logradouro.", ".$this->numero.", ".$this->cidade;  
            }    
        }        

        $meuEnd = new Endereco("Rua Marco Polo", "145", "São Paulo");

        //var_dump($meuEnd);

        //unset($meuEnd);

        echo $meuEnd;
 
        ?>   
      </div>    
    </body>
</html>