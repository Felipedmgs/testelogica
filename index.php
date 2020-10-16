<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo MDC</title>
</head>
<body>
    



<?php

    //variáveis inicializadas
    $n1 = 0;
    $n2 = 0;
    $nmaior = 0;
    $nmenor = 0;

    //define qual o maior e menor valor de entrada.
    function verificarmaiornumero(){        
        
        if ($n1 > $n2){            
            $nmaior = $n1;
            $nmenor = $n2;

        } else if ($n1 == $n2){            
            $nmaior = $n1;
            $nmenor = $n2;
            
            }else{
                $nmaior = $n2;
                $nmenor = $n1;
            }

            mdc ($nmaior,$nmenor);
    }
      
    
    //Função recursiva para calcular o MDC
    function mdc($nmaior,$nmenor){
        $a = max($nmaior,$nmenor);
        $b = min($nmaior,$nmenor);
        if($a%$b == 0){
            return $b;
        }else{
            return mdc($b,($a%$b));
        }
    }      
    

}





?>




</body>
</html>