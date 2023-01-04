<!doctype html>
<!--Norbert Kurzawski 3pir02-->
<?php
    $czas = date("Y-m-d G:i:s");
    setcookie("wizyta",$czas,time() + 3600)
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_COOKIE['wizyta'])) {
        $ostatnia = $_COOKIE['wizyta'];
        echo "Witamy ponownie! <br> Ostatni raz odwiedziłeś nas " .$ostatnia;
    } else {
        echo "Witaj po raz pierwszy na naszej stronie!";
    }
?>
<p><strong>Uwaga:</strong> Potrzebne może być odświeżenie strony.</p>
</body>
</html>
