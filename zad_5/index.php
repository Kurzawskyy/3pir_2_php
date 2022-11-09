<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 5</title>
    <style>
        body {
            background-color: mediumpurple;
        }
        header {
            margin: 5%;
            background-color: darksalmon;
        }

        section {
            margin: 50px;
        }

        .wynik {
            background-color: darkgrey;
            border: 3px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
<header>
    <h1>Zadanie 5</h1>
    <h2>Autor: Norbert Kurzawski 3pir</h2>
    <hr>
</header>

<section>
    <p>Napisz program, który oblicza sumę, różnicę, iloczyn i iloraz (całkowity - jak w C++) liczb całkowitych A i B.</p>

    <form action="index.php" method="post">
        <label for="a">Podaj liczbę  a:</label><input type="text" name="a">
        <label for="b">Podaj liczbę  b:</label><input type="text" name="b">

        <input type="submit" value="Wyślij">
    </form>
</section>
<section class="wynik">
    <?php
    if(isset($_POST['a'])) {
        $aF = $_POST['a'];
        $a = (int)$aF;

        $bF = $_POST['b'];
        $b = (int)$bF;

        $suma = $a + $b;
        $roz = $a - $b;
        $iloczyn = $a * $b;


        echo "a: $a <br>";
        echo "b: $b <br>";
        echo "suma: $suma <br>";
        echo "różnica: $roz <br>";
        echo "iloczyn: $iloczyn <br>";

        if ($b == 0) {
            echo "Nie można dzielić przez zero <br>";
            echo "Nie można policzyć reszty z dzielenia <br>";
        } else {
            $iloraz = floor($a / $b);
            echo "iloraz: $iloraz <br>";
            $resz = $a % $b;
            echo "reszta z dzielenia: $resz <br>";
        }

    }
    ?>
</section>
</body>
</html>