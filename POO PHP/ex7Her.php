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

            class Documento{

                private $num;

                public function getNum(){
                    return $this->num;
                }

                public function setNum($n){
                    $this->num = $n;
                }
            }

            class CPF extends Documento{

                public function validar():bool{
                    //Validação CPF
                    $numCPF = $this->getNum();
                        return true;
                }
            }

            $doc = new CPF();
            $doc->setNum("123456789-09");
            var_dump($doc->validar());
            echo "<br/>";
            echo $doc->getNum();
 
        ?>   
      </div>    
    </body>
</html>