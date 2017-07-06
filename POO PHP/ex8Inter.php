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
            
            interface Veiculo{

                public function acelerar($velocidade);
                public function frenar($velocidade);
                public function trocarMarcha($marcha);
            }

            class Civic implements Veiculo{

                public function acelerar($velocidade){
                    echo "O veículo acelerou até ".$velocidade." km/h";
                }
                public function frenar($velocidade){
                    echo "O veículo frenou até ".$velocidade." km/h";
                }
                public function trocarMarcha($marcha){
                    echo "O veículo engatou a marcha ".$marcha;
                }
            }

            $carro = new Civic();
            $carro->trocarMarcha(1);

        ?>   
      </div>    
    </body>
</html>