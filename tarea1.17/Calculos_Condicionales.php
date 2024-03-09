<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class = "titulo" >CALCULOS CONDICIONALES</h1>
       <ul class = "menu">
          <li><a href="index.html">Inicio</a></li>
          <li><a href="Escalera_De_Asteriscos.php">Escalera_De_Asteriscos</a></li>
          <li><a href="formulota.php">formulota</a></li>
          <li><a href="El_Lado_Mas_Corto.php">El_Lado_Mas_Corto</a></li>
       </ul>

       <div class = "Descripcion">
            <h2>Descripcion</h2>
            Eres muy bueno evaluando fórmulas y realizando cálculos directos, 
            pero te cuesta trabajo decidir en qué situaciones se deben hacer qué operaciones. 
            Un compañero te sugirió un ejercicio de cálculo mental que consiste en, 
            dado un número inicial, realizar las siguientes operaciones en el orden indicado y con aritmética entera:
            1- Si el valor actual de N es par, divídelo entre 2. En caso contrario, súmale 1.
            2- Si el valor actual de N tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10.
            3- Si el valor actual de N es un múltiplo de tres, réstale uno.
            Escribe un programa que te ayude a calcular el valor final de N y el número de veces que N fue modificado.
       </div>
       <div class = "Entrada" >
            <h2>Salida</h2>
            Un entero N. Puedes suponer que <math xmlns="http://www.w3.org/1998/Math/MathML">
  <mn>1</mn>
  <mo>&#x2264;</mo>
  <mi>N</mi>
  <mo>&#x2264;</mo>
  <mn>1000</mn>
</math> .
       </div>
       <div class = "Salida">
            <h2>Salida</h2>
            Dos enteros que correspondan con el valor final de N y el número de veces que N fue modificado respectivamente.
       </div>
       <div class = "Tabla">
       <table class = "tier1" border = "1"> 
        <thead>
            <tr>
                <th>Entrada</th>
                <th>Salida</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                <button title="Copiar en el portapapeles" class="clipboard btn btn-light">📋</button>
                <pre> 7 </pre>
                </td>
                <td>
                    <pre> 8 1</pre>
                </td>
            </tr>
        </tbody>
       </table>
       </div>
       <form action="Calculos_Condicionales.php" method="post">
        Numero 1:
        <input type="text" name="lol"> <br>
        <input type="submit" value="Enviar"> <br>
        </form>


<?php
    if($_POST){

        $lol = $_POST['lol'];
        $cont = 0;
           
            if($lol % 2 == 0)
            {
                $lol/=2;
                $cont++;
            }
            else
            {
                $lol+=1;
                $cont++;
            }
            if($lol >= 100)
            {
                $lol/= 100;
                $cont++;
            }
            else 
            {
                if($lol >= 10 && $lol <=99)
                {
                    $lol/= 10;
                    $cont++;
                }
            }
            if($lol % 3 == 0)
            {
                $lol-= 1;
                $cont++;
            }
        echo "Resultado: ". $lol." ".$cont;
    }
?>

</body>
</html>