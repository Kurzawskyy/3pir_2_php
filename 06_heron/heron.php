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
    <h1>Zadanie nr 6</h1>
    <h2>Autor: Norbert Kurzawski 3pir</h2>
    <h3>Napisz program, który oblicza pole trójkąta na podstawie długości jego boków za pomocą wzoru Herona</h3>
<form action="heron.php" method="post">
    <label for="zmA">Podaj A: </label>
    <input type="number" name="zmA"> <br>

    <label for="zmB">Podaj B: </label>
    <input type="number" name="zmB"> <br>

    <label for="zmC">Podaj C: </label>
    <input type="number" name="zmC"> <br>
    <input type="submit" value="Wyślij">
</form>
    <?php
        if(isset($_POST['zmA'])) {
            $a = $_POST['zmA'];
            $b = $_POST['zmB'];
            $c = $_POST['zmC'];

            $tab = [$a,$b,$c];
            sort($tab);

            if($tab[2] >= $tab[0] + $tab[1]) {
                echo "Nie można zbudować trójkąta z podanych długości boków. <br>";
                echo "a = $a, <br> b = $b, <br> c = $c";
            } else {
                echo "Pole trójkąta o bokach <br> a = $a, <br> b = $b, <br>c = $c <br>";
                $p = ($a+$b+$c)/2;
                $S = sqrt($p*($p-$a)*($p-$b)*($p-$c));
                echo "wynosi: $S";
            }
        }
    ?>
</body>
</html>