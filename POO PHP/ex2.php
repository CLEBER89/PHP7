<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilo.css"/>
        <title>Cleberson PHP</title>
    </head>
    <body>
      <div>
        <pre>
        <?php
            
            class Carro {
                
                private $model;
                private $engine;
                private $year;
                
                public function getModel(){
                    return $this->model;
                }
                    
                public function setModel($model){
                    $this->model = $model;
                }

                public function getEngine(){
                    return $this->engine;
                }

                public function setEngine($engine){
                    $this->engine = $engine;
                }

                public function getYear():int{
                    return $this->year;
                }

                public function setYear($year){
                    $this->year = $year;
                }

                public function exibir(){

                    return array(
                    "model"=>$this->getModel(),
                    "engine"=>$this->getEngine(),
                    "year"=>$this->getYear()
                    );
                }
            }    

        $gol = new Carro();
        $gol->setModel("Gol GTI");
        $gol->setEngine("2.0 turbo");
        $gol->setYear("2000");

        var_dump($gol->exibir());
          
        ?>   
        </pre>
      </div>    
    </body>
</html>