<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Zadanie 32</h1>
    <h2>Autor: Norbert Kurzawski, 3pir grupa druga</h2>
    <p>Napisz program, który losuje dwie liczby pseudolosowe z zakresu od a do b, wyświetla te liczby i określa która z nich jest większa, mniejsza, czy liczby są równe.</p>

    <form action="index.php" method="post">
        <label for="liczbaA">Podaj liczbę a (minimalna liczba): </label> <br>
        <input type="text" name="liczbaA"> <br>

        <label for="liczbaB">Podaj liczbę b (maksymalna liczba): </label> <br>
        <input type="text" name="liczbaB"> <br>

        <input type="submit" value="Wyślij">
    </form>


    <?php
        if(isset($_POST['liczbaA'])) {
            $a = $_POST['liczbaA'];
            $b = $_POST['liczbaB'];

            $los1 = rand($a,$b);
            $los2 = rand($a,$b);

            if($los1 > $los2) {
                echo "$los1 > $los2";
            } elseif($los1 < $los2) {
                echo "$los1 < $los2";
            } else {
                echo "$los1 = $los2";
            }

        }
    ?>
</body>
</html>