<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 4</title>
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
    <h1>Zadanie 4</h1>
    <h2>Autor: Norbert Kurzawski 3pir</h2>
    <hr>
</header>

<section>
    <p>Napisz program, który oblicza i wyświetla iloraz 2 liczb rzeczywistych z dokładnością do dwóch miejsc po przecinku.</p>

    <form action="index.php" method="post">
        <label for="a">Podaj liczbę  a:</label><input type="text" name="a">
        <label for="b">Podaj liczbę  b:</label><input type="text" name="b">

        <input type="submit" value="Wyślij">
    </form>
</section>
<section class="wynik">
    <?php
    if(isset($_POST['a'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        if($b == 0) {
            echo "Nie wolno dzielić przez zero!";
        } else {
            $iloraz = round($a/$b,2);
            echo "Wynik: <strong>$a : $b = $iloraz</strong>";
        }
    }






    ?>
</section>
</body>
</html>
