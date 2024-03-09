<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class = "titulo" >bit </h1>

<div>
<h2>Descripcion</h2>

</div>

<div>
<h2>Entrada</h2>
</div>

<div>
<h2>Salida</h2>
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
            <pre> 1010001 </pre>
        </td>
        <td>
         <pre> 10100011 </pre>
        </td>
    </tr>
</tbody>
</table>
<form action="bit1.8.php" method="post">
                    <label for="campo1">Numero 1:</label>
                    <input type="text" name="txtnum1"> <br>
                    <input type="submit" value="Enviar"> <br>
                </form>
</body>
</html>
<?php
                        if($_POST)
                        { 
                            $bit=$_POST['txtnum1'];
                            $t=strlen($bit);
                            $z=0;
                            for($i=0;$i<$t;$i++)
                            {
                                if($bit[$i]==1)
                                {
                                    $z++;
                                }
                            }
                            echo $bit;
                            if($z%2==0)
                            {
                                echo "0";
                            }
                            else {echo "1";}
                        }
                    ?>