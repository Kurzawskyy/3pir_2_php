<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T0 4</title>
    <style>
        td {
            border: 1px solid black;
            padding: 10px;
        }
        table {
            border-spacing: 0;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>Imię i nazwisko:</td>
        <td>Klasa/grupa</td>
        <td>Data:</td>
    </tr>
    <tr>
        <td>Norbert Kurzawski</td>
        <td>3pir, grupa 2</td>
        <td>23.11.2022</td>
    </tr>
</table>

<h1>Zadanie T084</h1>
<p>Napisz funkcję, która będzie przyjmowała dwa argumenty liczbowe i będzie wypisywała mniejszą z nich w kolorze zielonym, a większą w czerwonym. W przypadku podania liczb jednakowych obie należy wyświetlić w kolorze niebieskim.</p>
<hr>

<form action="T084.php" method="post">
    <label for="a">Podaj pierwszą wartość: </label>
    <input name="a" type="text"> <br> <br>
    <label for="b">Podaj drugą wartość: </label>
    <input name="b" type="text">
    <input type="submit" value="Wyślij"> <br> <br>
</form>

<?php
    if(isset($_POST['a'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        if(is_numeric($a) && is_numeric($b))
            wypisz($a,$b);
        else
            echo "Podane wartości muszą być numeryczne";
    }

    function wypisz($x,$y) {
        if($x < $y)
            echo "<span style='color: mediumspringgreen'>$x</span> &#60; <span style='color: red'>$y</span>";
        elseif ($x > $y)
            echo "<span style='color: red'>$x</span> &#62; <span style='color: mediumspringgreen'>$y</span>";
        else
            echo "<span style='color: blue'>$x</span> = <span style='color: blue'>$y</span>";
    }
?>
</body>
</html>