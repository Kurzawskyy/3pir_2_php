<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sekundy</title>
</head>
<body>
    <h1>Zadanie 08 sekundy</h1>
    <h2>Norbert Kurzawski 3pir</h2>
    <p>Napisz program, który przelicza czas podany w sekundach na zapis uwzględniający godziny, minuty oraz sekundy. Program zadziała dla s większego od 0.
        Przykład: dla s = 4000 wynikiem powinien być ciąg znaków : 1g6m40s</p>

    <hr>

    <form action="index.php" method="post">
        <label for="sek">podaj ilość sekund s = </label>
        <input name="sek" type="text">
        <input type="submit" value="Wyślij"> <br><br>
    </form>

    <?php
        if(isset($_POST['sek'])) {
            $sek = $_POST['sek'];
            if(is_numeric($sek)) {
                echo "Wynik: <b>".zamien($sek)."</b>";
            } else
                echo "Podana wartość musi być numeryczbna.";
        }

        function zamien($x) {
            $h = $x/3600;
            $h = (int)$h;

            $m = ($x - $h*3600)/60;
            $m = (int)$m;

            $s = $x - $h*3600 - $m*60;
            return $h."g".$m."m".$s."s";
        }
    ?>
</body>
</html>