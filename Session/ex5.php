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
            require_once("config.php");
          
            echo session_save_path();
            
            echo "<br>";  
          
            var_dump(session_status());
          
            echo "<br>";
          
            switch(session_status()){
                
                case PHP_SESSION_DISABLED:
                    echo"Sessões desabilitadas";
                break;
                
                case PHP_SESSION_NONE:
                    echo"Sessão ativada mas não habilitada";
                break;
                    
                case PHP_SESSION_ACTIVE:
                    echo"Sessões ativadas e habilitadas";
                break;    
            }
        ?> 
      </div>          
    </body>
</html>