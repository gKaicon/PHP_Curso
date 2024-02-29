<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="exS.php" method="get"><br>
        Inicial: <input type="number" name="i" id="iInicial" max="10000" min="-10000" value="0"><br>
        Final: <input type="number" name="f" id="iFinal" max="10000" min="-10000" value="0"><br>
        <label for="d_i">Valor do incremento ou decremento: </label>
        <select name="d_i" id="">
            <?php
            for ($i = 1; $i < 10; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_GET["i"]) && isset($_GET["f"])) {
        $i = $_GET["i"];
        $f = $_GET["f"];
        if ($i > $f) {
            while ($i >= $f) {
                echo "$i <br>";
                if ($i < $f || $i == $f) break;
                $i -= $_GET["d_i"];
            }
        }
        if ($i < $f) {
            while ($i <= $f) {
                echo "$i <br>";
                if ($i > $f || $i == $f) break;
                $i += $_GET["d_i"];
            }
        }
    }
    
    ?>
</body>

</html>