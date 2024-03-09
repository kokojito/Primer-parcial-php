<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1 class = "titulo" >FORMULOTA</h1>
       <ul class = "menu">
          <li><a href="index.html">Inicio</a></li>
          <li><a href="Calculos_Condicionales.php">Calculos_Condicionales</a></li>
          <li><a href="Escalera_De_Asteriscos.php">Escalera_De_Asteriscos</a></li>
          <li><a href="El_Lado_Mas_Corto.php">El_Lado_Mas_Corto</a></li>
         
       </ul>

      <div class = "Descripcion">
      <p>
            <h2>Descripción</h2>
            Diseñar un programa que pregunte los valores de las variables x,y,z y evalue la función f(x,y,z).
           <div class = "formula">
           <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
    <mi>f</mi>
    <mo stretchy="false">(</mo>
    <mi>x</mi>
    <mo>,</mo>
    <mi>y</mi>
    <mo>,</mo>
    <mi>z</mi>
    <mo stretchy="false">)</mo>
    <mo>=</mo>
    <mfrac>
        <mrow>
        <mfrac>
            <mrow>
            <mi>x</mi>
            <mo>+</mo>
            <mi>y</mi>
            </mrow>
            <mrow>
            <mn>2</mn>
            <mi>x</mi>
            </mrow>
        </mfrac>
        <mo>+</mo>
        <mfrac>
            <mrow>
            <msup>
                <mi>x</mi>
                <mn>3</mn>
            </msup>
            <mo>+</mo>
            <msup>
                <mi>y</mi>
                <mn>3</mn>
            </msup>
            </mrow>
            <mrow>
            <msup>
                <mi>x</mi>
                <mn>2</mn>
            </msup>
            <mo>+</mo>
            <msup>
                <mi>y</mi>
                <mn>2</mn>
            </msup>
            </mrow>
        </mfrac>
        </mrow>
        <mrow>
        <msup>
            <mi>x</mi>
            <mn>2</mn>
        </msup>
        <mo>+</mo>
        <msup>
            <mi>y</mi>
            <mn>2</mn>
        </msup>
        <mo>+</mo>
        <msup>
            <mi>z</mi>
            <mn>2</mn>
        </msup>
        </mrow>
    </mfrac>
    </math>
           </div>
        </p>
        <p>
            <h2>Entrada</h2>
            El programa pedirá tres números, uno por renglón, estos podrán ser positivos, negativos o cero, y pudieran tener decimales.
        </p>
        <p>
            <h2>Salida</h2>
            La respuesta, o salida a la consola, será el valor de la función f(x,y,z) redondeado a 6 decimales.
            Nota: Se puede usar la función tofixed(numero,decimales) para ajustar la salida.
        </p>

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
                <pre>1 2 3</pre>
                </td>
                <td>
                    <pre>0.235714</pre>
                </td>
            </tr>
        </tbody>
       </table>
      </div>

        <form action="formulota.php" method="post">
        Numero 1:
        <input type="text" name="lol"> <br>
        Numero 2:
        <input type="text" name="lmao"> <br>
        Numero 3:
        <input type="text" name="xd"> <br>
        <input type="submit" value="Enviar"> <br>
        </form>

<?php
    if($_POST){

        $lol = $_POST['lol'];
        $lmao = $_POST['lmao'];
        $xd = $_POST['xd'];
        
        $Resultado = ((($lol+$lmao)/(2*$lol))+(($lol*$lol*$lol+$lmao*$lmao*$lmao)/($lol*$lol+$lmao*$lmao)))/($lol*$lol+$lmao*$lmao+$xd*$xd);
        echo "Resultado: ". $Resultado;
    }
?>
</body>
</html>
