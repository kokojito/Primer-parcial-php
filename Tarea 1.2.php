<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Formulas</h1>
        <?php
                        $a = 72.569;
                        $x = (3 * $a) + 15;
                        $y = ($x + 3)/ ($x + 1);
                        $z = (5 * $x + 7 * $y) / ($a * $x * $y);
                        echo "Resultado:". number_format($z, 3);
                    ?>
</body>
</html>