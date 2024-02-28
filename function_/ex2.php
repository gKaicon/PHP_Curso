<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function teste(&$x)
    {
        $x = $x + 2;
        echo $x;
    }
    $a = 3;
    teste($a);
    
    echo "<br>$a";

    ?>
</body>

</html>