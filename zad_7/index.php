<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Zadanie 7</h1>
    <h2>Norbert Kurzawski 3pir</h2>
    <hr>
    <p>Napisz program, który dla podanej temperatury w stopniach Celsjusza zamienia ją na stopnie Kelwina i Fahrenheita.</p>
    <p>Użyj funkcji</p>

    <form action="index.php" method="post">
        <label for="st">podaj temperaturę w stopniach Celcjuszach: </label>
        <input name="st" type="text">
        <input type="submit" value="Wyślij"> <br> <br>
    </form>
<?php
    if(isset($_POST['st'])) {
        $st = $_POST['st'];
        if(is_numeric($st)) {
            $k = kelwin($st);
            $f = fahrenheit($st);
            echo "Wyniki obliczeń dla stopni Celcjusza = $st: <br>";
            echo "Stopnie Kelwina = $k <br>";
            echo "Stopnie Fahrenheita = $f";
        } else
            echo "<br>Wartość musi być numeryczna.";
    }

    function kelwin($x) {
        if($x <= -273.15) return 0;
        $kel = 273.15 + $x;
        return $kel;


    }
    function fahrenheit($x) {
        $fah = 9/5*$x + 32;
        return $fah;
    }
?>
</body>
</html>
