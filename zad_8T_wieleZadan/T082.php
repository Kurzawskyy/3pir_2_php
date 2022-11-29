<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TO 2</title>
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

<h1>Zadanie T082</h1>
<p>Napisz funkcję, której wynikiem będzie podniesienie wartości przekazanego jej poprzez referencję argumentu do potęgi przekazanej również jako argument. Funkcja zwraca wartość i wyświetla wynik w postaci (np. dla wartości 2 i 3):</p>
<p>x = 2 <br>
    y = 3 <br>
    x<sup>y</sup>=2<sup>3</sup>=8</p>
<p>trochę musicie pokombinować, aby wynik był wyświetlany na stronie w postaci takiego wyrażenia ;)</p>
<hr>

<form action="T082.php" method="post">
    <label for="x">Podaj pierwszy parametr x (podstawa potęgi): </label>
    <input name="x" type="text"> <br> <br>
    <label for="y">Podaj drugi parametr y (wykłądnik potęgi): </label>
    <input name="y" type="text">
    <input type="submit" value="Wyślij"> <br> <br>
</form>

<?php
    if(isset($_POST['x']) && isset($_POST['y'])) {
        $x = $_POST['x'];
        $y = $_POST['y'];
        if(is_numeric($x) && is_numeric($y)) {
            echo "x = $x";
            echo "<br>y = $y";
            echo "<br>x<sup>y</sup> = $x<sup>$y</sup> = ".potega($x,$y);
        } else
            echo "Obie wartości muszą być numeryczne.";
    }

    function potega(&$a,$b) {
        return pow($a,$b);
    }
?>

</body>
</html>