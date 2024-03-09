<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class = "titulo" >EL LADO MAS CORTO</h1>
       <ul class = "menu">
          <li><a href="index.html">Inicio</a></li>
          <li><a href="Calculos_Condicionales.php">Calculos_Condicionales</a></li>
          <li><a href="Escalera_De_Asteriscos.php">Escalera_De_Asteriscos</a></li>
          <li><a href="formulota.php">formulota</a></li>
       </ul>
       <div class = "Descripcion">
      <p>
            <h2>Descripción</h2>
            Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero, calcule la longitud de su lado más corto.
            <div>
            <img src="https://omegaup.com/img/El-lado-mas-corto/92ba89763999e8ba279d510c31c3e0bb666bf271.png" alt="">
            </div>
            
        </p>
        <p>
            <h2>Entrada</h2>
            Ocho reales <math xmlns="http://www.w3.org/1998/Math/MathML">
  <msub>
    <mi>x</mi>
    <mn>1</mn>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>y</mi>
    <mn>1</mn>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>x</mi>
    <mn>2</mn>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>y</mi>
    <mn>2</mn>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>x</mi>
    <mn>3</mn>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>y</mi>
    <mn>3</mn>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>x</mi>
    <mn>4</mn>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>y</mi>
    <mn>4</mn>
  </msub>
</math>. Puedes suponer que <math xmlns="http://www.w3.org/1998/Math/MathML">
  <mn>0</mn>
  <mo>&#x2264;</mo>
  <msub>
    <mi>x</mi>
    <mi>i</mi>
  </msub>
  <mo>,</mo>
  <msub>
    <mi>y</mi>
    <mi>i</mi>
  </msub>
  <mo>&#x2264;</mo>
  <mn>100</mn>
</math> y que los vértices se listan ordenados en el sentido de las manecillas del reloj.
        </p>
        <p>
            <h2>Salida</h2>
            Un real que sea la longitud del lado más corto del cuadrilátero. Tu programa se considerará correcto si el valor calculado es razonablemente cercano a la respuesta exacta.
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
                <pre>x1:10.1 y1:10.2  x2:20.2 y2:10.3  x3:22.3 y3:4.1 x4:7.5 y4:0.9 </pre>
                </td>
                <td>
                    <pre>6.545991</pre>
                </td>
            </tr>
        </tbody>
       </table>
      </div>

      <form action="El_Lado_Mas_Corto.php" method="post">
        x1:
        <input type="text" name="lol"> <br>
        x2:
        <input type="text" name="lmao"> <br>
        x3:
        <input type="text" name="xd"> <br>
        x4:
        <input type="text" name="troll"> <br>
        y1:
        <input type="text" name="v"> <br>
        y2:
        <input type="text" name="sigma"> <br>
        y3:
        <input type="text" name="chad"> <br>
        y4:
        <input type="text" name="mewing"> <br>
        <input type="submit" value="Enviar"> <br>
        </form>

        <?php
    if($_POST){

        $lol = $_POST['lol']; 
        $lmao = $_POST['lmao']; 
        $xd = $_POST['xd']; 
        $troll = $_POST['troll']; 
        $v = $_POST['v']; 
        $sigma = $_POST['sigma']; 
        $chad = $_POST['chad']; 
        $mewing = $_POST['mewing'];
        
        $a = sqrt((pow($lmao-$lol,2))+(pow($sigma-$v,2)));
        $b = sqrt((pow($xd-$lmao,2))+(pow($chad-$sigma,2)));
        $c = sqrt((pow($troll-$xd,2))+(pow($mewing-$chad,2)));
        $d = sqrt((pow($troll-$lol,2))+(pow($mewing-$v,2)));

        if($a<$b && $a<$c && $a<$d)
        {
            echo "Resultado: ". $a;
        }
        else if ($b<$c && $b<$d)
        {
            echo "Resultado: ". $b;
        }
        else if ($c<$d)
        {
            echo "Resultado: ". $c;
        }
        else
        {
            echo "Resultado: ".$d;
        }
    }   
?>
</body>
</html>