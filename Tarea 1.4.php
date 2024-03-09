<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <style>
                body
                {
                    background-color: yellow;
                }
                h1
                {
                    text-align: center;
                    color: black;
                }
                h2
                {
                    text-align: left;
                    color: black;
                }
                th
                {
                    color: black;
                }
        </style>
  
     <h1>¿Cuantos valen 7?</h1>
        <p>
            <h2>Descripción</h2>
            Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7.
        </p>
        <p>
            <h2>Entrada</h2>
            Dos enteros en el rango de -1000 a +1000.
        </p>
        <p>
            <h2>Salida</h2>
            La cantidad de enteros iguales a 7.
        </p>
        <table border = "1"> 
     <tr>
            <th> Input </th>
            <th> Output <br> </th>
     </tr>
     <tr>
        <td> 7 <br>
            9</td>
        <td> 1</td> <!-- output-->
     </tr>
    </table>
    <?php
     $Day =7;
     $Month = 9;
    if($Day == 7 && $Month == 7)
    {
        echo "resultado: 2";
    }
    else if ($Day == 7 or $Month == 7)
    {
        echo "resultado: 1";
    }
    else
    {
        echo " resultado: 0";
    }
    
?>
    <hr>
    <h1> El mayor de tres números </h1>
        <p>
            <h2>Descripción</h2>
            Realiza un problema que imprima el mayor de tres números
        </p>
        <p>
            <h2>Entrada</h2>
            Escribe tres números enteros x,y,z 
        </p>
        <p>
            <h2>Salida</h2>
            El número entero mayor de los tres números introducidos.
        </p>
        <table border = "1"> 
     <tr>
            <th> Input </th>
            <th> Output <br> </th>
     </tr>
     <tr>
        <td> 10 <br>
            8 <br>
            -7 </td>
        <td> 10</td> <!-- output-->
     </tr>
    </table>
    <?php
     $x = 1;
     $y = 3;
     $z = 4;
     echo "<br>";
     echo "resultado:".max(max($x, $y), $z);
?>
  <hr>
    <h1> Estaciones del Año </h1>
        <p>
            <h2>Descripción</h2>
            Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día y un mes

según lo siguiente:

    Winter del 21 de diciembre al 20 de marzo
    Spring del 21 de marzo al 21 de junio
    Summer del 22 de junio al 22 de septiembre
    Fall del 23 de septiembre al 20 de diciembre

Considerando la siguiente cantidad de días para cada mes:

    Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días
    Abril, Junio, Septiembre y Noviembre 30 días
    Febrero 28 días
    Cualquier fecha fuera de estos rangos debe considerarse como no existente

Ayuda a Brithany a crear ese programa usando estructuras de control selectivas.
        </p>
        <p>
            <h2>Entrada</h2>
            Dos números enteros y separados por un espacio que corresponden al día y mes de una fecha determinada
        </p>
        <p>
            <h2>Salida</h2>
            Una cadena que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, si la fecha no es válida
        </p>
        <table border = "1"> 
     <tr>
            <th> Input </th>
            <th> Output <br> </th>
     </tr>
     <tr>
        <td> 15 10</td>
        <td> fall</td> <!-- output-->
     </tr>
    </table>
    <?php
      $dia = 15;
      $mes = 10;
    switch($mes) {
        case 1: 
            if($dia > 31 or $dia < 1) {
                echo "NO EXISTE";
            }
            else
                echo "WINTER";
            break;
        case 2:
            if($dia > 28 or $dia < 1) {
                echo "NO EXISTE";
            }else
            echo "WINTER";
            break;
        case 3:
            if($dia > 31 or $dia < 1) {
                echo "NO EXISTE";
            }
            else {
                if($dia <= 21) {
                    echo "WINTER";
                }
                else {
                    echo "SPRING";
                }
            }
            break;
        case 4:
            if($dia > 30 or $dia < 1) {
                echo "NO EXISTE";
            }
            else
            echo "SPRING";
            break;
        case 5:
            if($dia > 31 or $dia < 1) {
                echo "NO EXISTE";
            }
            else 
                echo "SPRING";
            break;
        case 6:
            if($dia > 30 or $dia < 1) {
                echo "NO EXISTE";
            }
            else {
                if($dia <= 21) {
                    echo "SPRING";
                }
                else {
                    echo "SUMMER";
                }
            }
            break;
        case 7: 
            if($dia > 31 or $dia < 1) {
                echo "NO EXISTE";
            }
            else
                echo "SUMMER";
            break;
        case 8: 
            if($dia > 31 or $dia < 1) {
                echo "NO EXISTE";
            }
            else
            echo "SUMMER";
            break;
        case 9:
            if($dia > 30 or $dia < 1) {
                echo "NO EXISTE";
            }
            else {
                if($dia <= 21) {
                    echo "SUMMER";
                }
                else {
                    echo "FALL";
                }
            }
            
        case 10:
            if($dia > 31 or $dia  < 1) {
                echo "NO EXISTE";
            }
            else
            echo "FALL";
            break;
        case 11:
            if($dia > 30 or $dia  < 1) {
                echo "NO EXISTE";
            }
            else
            echo "FALL";
            break;
        case 12:
            if($dia > 31 or $dia < 1) {
                echo "NO EXISTE";
            }
            else {
                if($dia <= 21) {
                    echo "FALL";
                }
                else {
                    echo "WINTER";
                }
            }
            break;
    }
    ?>



</body>
</html>


