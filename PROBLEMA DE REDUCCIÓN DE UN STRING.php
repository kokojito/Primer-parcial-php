<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<H1>PROBLEMA DE REDUCCIÓN DE UN STRING</H1>
<form action="PROBLEMA DE REDUCCIÓN DE UN STRING.php" method="post">
    Frase:
    <input type="text" name="xd"> <br>
    <input type="submit" value="Enviar"> <br>
</form>
<?php
    if($_POST){
        $xd=$_POST['xd'];
        $n = strlen($xd);
        
            if($n > 4)
            {
                echo $xd[0],$n-2,$xd[$n-1];
            }
            else
            {
                echo $xd;
            }
        
    }
?>
</body>
</html>
