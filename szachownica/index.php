<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Szachownica</title>
</head>
<body>
    <h1>Zadanie 08.1N liczba nieodkryta</h1>
    <h2>Norbert Kurzawski 3pir02</h2>
    <p>Napisz kod php z funkcją szachownica($a). Funkcja przyjmuje jeden parametr. który określa ilość kratek w wierszu i kolumnie.</p>
    <hr>

    <form action="index.php" method="post">
        <label for="a">Podaj rozmiar szachownicy a: </label>
        <input name="a" type="text"> <br>
        <input type="submit" value="Wyślij"> <br><br>
    </form>

    <?php
        if(isset($_POST['a'])) {
            $a = $_POST['a'];
            if(is_numeric($a)) {
                szachownica($a);
            }
        }

        function szachownica($x) {
            $x = (int)$x;
            $p = true;

            for($i = 0; $i < $x; $i++) {
                for($j = 0; $j < $x; $j++) {
                    if($i % 2 == 0) {
                        if($j % 2 == 0) {
                            yellow();
                        } else {
                            blue();
                        }
                    } else {
                        if($j % 2 == 0) {
                            blue();
                        } else {
                           yellow();
                        }
                    }
                }
                echo "<div style='clear: both'></div>";
            }
        }

        function blue() {
            echo "<div style='width: 50px;height: 50px;background-color: blue;float:left;'></div>";
        }
        function yellow() {
            echo "<div style='width: 50px;height: 50px;background-color: yellow;float:left;'></div>";
        }
    ?>
</body>
</html>