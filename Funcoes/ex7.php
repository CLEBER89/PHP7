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
            
            $hierarquia = array(
                array(
                    'nome_cargo'=>'CEO',
                    'subordinados'=>array(
                        //Inicio: diretor comercial
                        array(
                            'nome_cargo'=>'Diretor Comercial',
                            'subordinados'=>array(
                                //início: gerente de vendas
                                array(
                                    'nome_cargo'=>'Gerente de Vendas' 
                                )
                                //termino: gerente de vendas
                            )
                        ),
                        //Termino: diretor comercial
                        //início: diretor financeiro
                        array(
                            'nome_cargo'=>'Diretor Financeiro',
                            'subordinados'=>array(
                                //início: gerente de contas a pagar
                                array(
                                    'nome_cargo'=>'Gerente de Contas a Pagar',
                                    'subordinados'=>array(
                                        //início: supervisor de contas a pagar
                                        array(
                                            'nome_cargo'=>'Supervisor de Contas a Pagar',
                                            'subordinados'=>array(
                                                array(
                                                    'nome_cargo'=>'Contador'
                                                )
                                            )
                                        )
                                        //termino: supervisor de contas a pagar
                                    )
                                ),
                                //termino: geretnte de contas a pagar
                                //termino: gerente de compras
                                array(
                                    'nome_cargo'=>'Gerente de Compras',
                                    'subordinados'=>array(
                                        //inicio: supevisor de compras
                                        array(
                                            'nome_cargo'=>'Supervisor de Compras'
                                        )
                                        //termino: supervisor de compras
                                    )
                                )
                            )
                        )
                        //termino: diretor de contas a pagar
                    )
                )
            );    
          
        function exibe($cargos){
            
            $html = '<ul>';
            
            foreach($cargos as $cargo){
                $html .= "<li>";
                $html .= $cargo['nome_cargo'];
                if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
                    $html .= exibe($cargo['subordinados']);
                }
                $html .="</li>";
            }
            
            $html .= "</ul>";
            
            return $html;
            
        }  
          
        echo exibe($hierarquia);  
        ?>  
      </div>    
    </body>
</html>