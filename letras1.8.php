<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class = "titulo" > letras</h1>

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
<form action="letras1.8.php" method="post">
                    <label for="campo1">Numero 1:</label>
                    <input type="text" name="txtnum1"> <br>
                    <input type="submit" value="Enviar"> <br>
                </form>
               
</body>
</html>
<?php
                        if($_POST)
                        { 
                            $pal=$_POST['txtnum1'];
                            $d=0;
                            $c=strlen($pal);
                            for($i=0;$i<$c;$i++)
                            {
                                if($pal[$i]=="d")
                                {
                                    $d++;
                                }
                            }
                            echo "d: ",$d;
                        }
     ?>