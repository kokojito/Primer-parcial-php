<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class = "titulo" >ESCALERA DE ASTERISCOS</h1>
       <ul class = "menu">
          <li><a href="index.html">Inicio</a></li>
          <li><a href="formulota.php">formulota</a></li>
          <li><a href="El_Lado_Mas_Corto.php">El_Lado_Mas_Corto</a></li>
          <li><a href="Calculos_Condicionales.php">Calculos_Condicionales</a></li>
       </ul>
       
       <div class = "Descripcion">
            <h2>Descripcion</h2>
            Inés quiere llegar a su casa, pero accidentalmente, los arquitectos construyeron la puerta demasiado alta. 
            Tu misión es ayudar a Inés a subir a su casa construyendo una escalera de longitud y altura hecha de asteriscos.
       </div>
       <div class = "Entrada" >
            <h2>Entrada</h2>
            Se te darán como valor de entrada un numero entero el cuál representa la longitud y altura de la escalera.
         </div>
         <div class = "Salida">
            <h2>Salida</h2>
            Deberás imprimir como salida una escalera de dimensiones de largo y de alto
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
                <pre> 3 </pre>
                </td>
                <td>
                    <pre>#
##
###</pre>
                </td>
            </tr>
        </tbody>
       </table>
       </div>
       <form action="Escalera_De_Asteriscos.php" method="post">
        Escalones:
        <input type="text" name="lol"> <br>
        <input type="submit" value="Enviar"> <br>
        </form>
        <?php
    if($_POST){

        $lol = $_POST['lol'];
        
        for($i = 1; $i<=$lol; $i++)
        {
            for($j = 0; $j<$i; $j++)
            {
                echo "#";
            }
            echo "<br>";
        }
    }
?>
</body>
</html>