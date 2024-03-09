<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style = "text-align: center;">5630. Colegiatura</h1>
    <p>  </p>
    <h2>Descripción </h2>
    <p>
    La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca, pero le preocupa cuanto vaya a pagar, y te pide ayuda para que hagas un programa que le diga cuanto tenga que pagar. El esquema que maneja la prepa es este:

La colegiatura de los alumnos se determina según el numero de materias que cursan. El costo de cada una de las materias es de $1600.

Se ha establecido un programa para estimular a los alumnos, el cual consiste en lo siguiente: si el promedio obtenido por un alumno en el ultimo periodo es mayor o igual que 9, se le hará un descuento del 30% sobre la colegiatura y no se le cobrara IVA; si el promedio obtenido es menor que 9 deberá pagar la colegiatura completa, mas el IVA del 16%.

    </p>
    <h1>Entrada</h1>
    <p>
    El numero de materias A que Esteban va a cursar. Y un numero con decimales B que es el promedio de Esteban.
    </p>
    <h1> Salida</h1>
    <p>
    Un numero entero con el precio a pagar. Debe de ir con un $.
    </p>
    <h1>Ejemplo</h1>

    <table border = "1"> 
     <tr>
            <th> Input </th>
            <th> Output <br> </th>
     </tr>
     <tr>
        <td> 5 <br>
            9.6</td>
        <td> $5600</td> <!-- output-->
     </tr>
    </table>
</body>
</html>
<?php
    $a = 5;
    $b = 9.6;
    $c = $a * 1600;

    if($b >= 9)
    {
        $c -= $c * 0.30;
    }
    else
    {
        $c += $c * 0.16;
    }
    echo " <p> El resultado es el siguiente mi chavo xd: </p>"."$". $c;
?>