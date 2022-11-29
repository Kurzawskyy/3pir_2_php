<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T0 5</title>
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

<h1>Zadanie T085</h1>
<p>Napisz funkcję, która dla dwóch liczb całkowitych wyświetla ich wspólny dzielnik (przypomnij sobie algorytm Euklidesa).</p>
<hr>

<form action="T085.php" method="post">
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
            echo euklides($a,$b);
        else
            echo "Podawane wartości muszą być numeryczne";
    }

    function euklides($x,$y) {
        while($x != $y)
            if($x > $y)
                $x -= $y;
            else
                $y -= $x;
        echo "Największy wspólny dzielnik podanych liczb to: $y";
    }
?>
</body>
</html>