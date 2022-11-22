<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Zadanie 9</h1>
<h2>Norbert Kurzawski 3pir</h2>
    <hr>
    <p>Napisz program, który zamienia długość podaną w calach na mm.
        (1cal=25,3995 mm) <br></p>

    <form action="index.php" method="post">
        <label for="cale">Długość w calach:</label> <br>
        <input name="cale" type="text"> <br>
        <input type="submit" value="Wyślij"> <br> <br>
    </form>

    <?php
        if(isset($_POST["cale"])) {
            $cale = $_POST["cale"];
            if(is_numeric($cale)) {
                if($cale < 0)
                    echo "Długość musi być liczbą nieujemną.";
                else {
                    $mm = $cale * 25.3995;
                    echo "$cale cali to $mm mm.";
                }
            } else
                echo "Proszę podać wartość numeryczną.";


        }
    ?>
</body>
</html>