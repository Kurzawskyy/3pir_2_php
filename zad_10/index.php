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
    <h1>Zadanie 10</h1>
    <h2>Norbert Kurzawski 3pir</h2>
    <hr>
    <p>Napisz program, który dla danego x będącego liczbą rzeczywistą oblicza wartość wyrażenia</p>
    <img src="img.png" alt="rownanie"> <br>

    <form action="index.php" method="post">
        <label for="x">Wartość x:</label> <br>
        <input name="x" type="text"> <br>
        <input type="submit" value="Wyślij"> <br> <br>
    </form>

    <?php
        if(isset($_POST["x"])) {
            $x = $_POST["x"];
            if(is_numeric($x)) {
                $wartosc = pow($x,2)/pow(1+($x<0 ? $x = -$x : $x = $x),2);
                echo "Wartość wyrażenia: $wartosc";
            } else
                echo "Podana wartość musi być liczbą rzeczywistą.";
        }
    ?>
</body>
</html>