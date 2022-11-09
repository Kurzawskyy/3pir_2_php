<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 3</title>
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
        <h1>Zadanie 3</h1>
        <h2>Autor: Norbert Kurzawski 3pir</h2>
        <hr>
    </header>

    <section>
        <p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią geometryczną. Wynik wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.</p>

        <form action="index.php" method="post">
            <label for="a">Podaj liczbę  a:</label><input type="text" name="a">
            <label for="b">Podaj liczbę  b:</label><input type="text" name="b">
            <label for="c">Podaj liczbę  c:</label><input type="text" name="c">
            <label for="d">Podaj liczbę  d:</label><input type="text" name="d">


            <input type="submit" value="Wyślij">
        </form>
    </section>

    <section class="wynik">
        <?php
        if(isset($_POST['a'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
            $d = $_POST['d'];

            $srednia = pow($a*$b*$c*$d,0.25);

            echo "a = $a <br>";
            echo "b = $b <br>";
            echo "c = $c <br>";
            echo "d = $d <br>";
            echo "średnia = $srednia <br>";
            $srednia_zak = round($srednia,3);
            echo "średnia zaokrąglona = $srednia_zak";
        }

        ?>
    </section>
</body>
</html>
