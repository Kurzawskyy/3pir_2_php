<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cale na milimetrry</title>
</head>
<body>
    <h1>Zadanie 09</h1>
<h2>Norbert Kurzawski 3pir</h2>
    <hr>
    <p>Napisz program, który zamienia długość podaną w calach na mm.
        (1cal=25,3995 mm) <br></p>

    <form action="index.php" method="post">
        <label for="cale">Długość w calach:</label> <br>
        <input name="cale" type="text"> <br> <br>
        <input type="submit" value="Wyślij"> <br> <br>
    </form>

    <?php
        if(isset($_POST["cale"])) {
            $cale = $_POST["cale"];
            if(is_numeric($cale)) {
                echo naMM($cale);
            } else
                echo "Proszę podać wartość numeryczną.";
        }

        function naMM($x) {
            if($x < 0) return "Długość musi być liczbą nieujemną.";
            else {
                $mm = $x * 25.3995;
                return "$x cali to $mm mm.";
            }
        }
    ?>
</body>
</html>