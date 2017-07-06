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

            class Programador extends Pessoa{
                public function verDados(){

                    echo get_class($this) . "<br>";

                    echo $this->nome .  "<br>";
                    echo $this->idade . "<br>";
                    echo $this->senha . "<br>";
                }
            }   

            $objeto = new Programador();

            //echo $objeto->nome . "<br>";

            $objeto->verDados();
 
        ?>   
      </div>    
    </body>
</html>