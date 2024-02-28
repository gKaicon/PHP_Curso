<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = $_GET["n"];
        $i = 0;
        do {
            echo "$n x $i = " . ($n * $i) . "<br>";
            $i++;
        } while ($i <= 10);
    
    ?>
</body>
</html>