<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liczba odkryta</title>
</head>
<body>
    <h1>Zadanie 08.1N liczba nieodkryta</h1>
    <h2>Norbert Kurzawski 3pir02</h2>
    <p>Liczbą odkrytą nazywamy liczbę całkowitą większą od 0, której wartość jest podzielna przez każdą cyfrę różną od zera, z której się składa jej zapis. Jeśli liczba całkowita jest zapisana w systemie liczbowym o podstawie p, gdzie 2≤p≤10, to jest ona liczbą odkrytą, jeśli jej wartość w systemie dziesiętnym jest podzielna przez każdą cyfrę różną od zera, z której się składa jej zapis w systemie o podstawie p.</p>
    <p>Przykłady:</p>
    <p>Dla p=10 liczbą odkrytą jest liczba 24, ponieważ dzieli się przez 2 oraz 4, natomiast przykładem liczby nieodkrytej jest liczba 26, ponieważ dzieli się przez 2, ale nie dzieli się przez 6.
    <br><br>
        Napisz funkcję w języku PHP, która dla podanej liczby dziesiętnej większej od 0 zwraca TRUE, gdy liczba jest odkryta i FALSE w przeciwnym wypadku.</p>
    <hr>

    <form action="index.php" method="post">
        <label for="liczba">Podaj liczbę całkowitą większą od zera: </label>
        <input name="liczba" type="text"> <br>
        <input type="submit" value="Wyślij"> <br><br>
    </form>

    <?php
        if(isset($_POST['liczba'])) {
            $liczba = $_POST['liczba'];
            if(is_numeric($liczba)) {
                echo 'Podana wartość zwraca dla zapytania wartość : '.odkryta($liczba);
            } else
                echo "Podana wartość musi być numeryczna.";
        }

        function odkryta($x) {
            $czyOdkryta = true;
            $rozmiar = strlen($x);
            $liczba = (int)$x;

            if($liczba > 0) {
                for($j = 0; $j <  $rozmiar; $j++) {
                    $a = $x[$j];
                    $a = (int)$a;
                    if($a == 0) continue;
                    else
                        if(!($liczba % $a == 0))
                            $czyOdkryta = false;

                }

                return $czyOdkryta ? "TRUE" : "FALSE";
            } else
                return "ERROR: wartośc miała być liczbą większą od zera";





        }
    ?>
</body>
</html>