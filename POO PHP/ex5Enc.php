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
            
            class Pessoa{
                public $nome = "Ramus Lerdorf";
                protected $idade = 48;
                private $senha = "123456";

                public function verDados(){
                    echo $this->nome .  "<br>";
                    echo $this->idade . "<br>";
                    echo $this->senha . "<br>";
                }
            }

            $objeto = new Pessoa();

            //echo $objeto->nome . "<br>";
           //echo $objeto->idade . "<br>";
            $objeto->verDados();
 
        ?>   
      </div>    
    </body>
</html>