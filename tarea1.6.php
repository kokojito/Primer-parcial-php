<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1 class = "titulo" >Sumando dos conjuntos</h1>

        <div>
        <h2>Descripcion</h2>
        Dados dos conjuntos de enteros de tamaño N, imprimir el resultado de sumarlos. 1<=N<=100. Por ejemplo, sea N=4:

2 3 4 5

6 7 1 3

El resultado de sumarlos es:

8 10 5 8
        </div>

        <div>
        <h2>Entrada</h2>
        En la primera línea el entero N. En la segunda línea, separados por un espacio, los números del primer conjunto. En la tercera línea también separados por un espacio, los números del segundo conjunto.
        </div>

        <div>
        <h2>Salida</h2>
        Los números resultantes de sumar ambos conjuntos, separados por un espacio.
        </div>

        <div>
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
                 <pre> 8 10 5 8 </pre>
                </td>
            </tr>
        </tbody>
       </table>
       Resultado:
       </div>
</body>
</html>
<?php
    $n = 4;
    $Data = array(2, 3, 4, 5);
    $Dato = array(6, 7, 1, 3);
    
    for ($i = 0; $i < $n; $i++) 
    {
        $suma = $Data[$i] + $Dato[$i];
         echo $suma . " ";
    }
   
    ?>
