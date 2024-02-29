<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $i = $_GET["i"];
        $f = $_GET["f"];
        if ($i > $f) {
            while ($i >= $f) {
                echo "$i <br>";
                if($i < $f || $i == $f) break;
                $i -= $_GET["d_i"];
            }
        }
        if ($i < $f) {
            while ($i <= $f) {
                echo "$i <br>";
                if($i > $f || $i == $f) break;
                $i += $_GET["d_i"];
            }
        }
    ?>
</body>

</html>