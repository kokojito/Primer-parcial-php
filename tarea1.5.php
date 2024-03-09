<?php
    $aprobado = 0;
    $reprobado = 0;
    $UpProm = 0;
    $calificacion = array();
    $n = rand(1, 1000);

    for($i = 1; $i<=$n; $i++) #ciclo de llenado
    {
        array_push($calificacion, rand(1,1000));
        $plus += $calificacion[$i];
    }
    /////////////////////////////////
    $promedio = round($plus / $n, 2);
   //////////////////////////////////
    for($i = 0; $i<$n; $i++) 
    {
       if($calificacion[$i] >= $promedio)
       {
         $UpProm++;
       }          
    }
    /////////////////////////////////
    for($i = 0; $i<$n; $i++) 
    {
       if($calificacion[$i] < 6)
       {
         $reprobado++;
       }
       else
       {
         $aprobado++;
       }       
    }
    $porc_R = ($reprobado) / $n * (100);
    $porc_A = ($aprobado) / $n * (100);
    



?>