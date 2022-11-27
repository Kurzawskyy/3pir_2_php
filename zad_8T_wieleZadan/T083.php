<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T0 3</title>
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

<h1>Zadanie T083</h1>
<p>Napisz funkcję, która dla podanej liczby całkowitej w zakresie od 1 do 12 zwraca nazwę miesiąca w języku polskim. W przypadku podania innej wartości zwraca informację o błędzie.</p>
<hr>

<form action="T083.php" method="post">
    <label for="mies">Podaj liczbe z zakresu od 1 do 12: </label>
    <input name="mies" type="text">
    <input type="submit" value="Wyślij"> <br> <br>
</form>

<?php
    if(isset($_POST['mies'])) {
        $mies = $_POST['mies'];
        if(is_numeric($mies)) {
            if($mies >=1 && $mies <= 12)
                echo "Wybrany miesiąc to: ".miesiac($mies);
            else
                echo "BŁĄD: Podana wartośc musi mieścić się w przedziale liczbowym od 1 do 12";
        } else {
            echo "BŁAD: Podana wartość musi być numeryczna";
        }
    }

    function miesiac($x) {
        $odp = ['Styczeń','Luty','Marzec','Kwiecień','Maj','Czerwiec','Lipiec','Sierpień','Wrzesień','Październik','Listopad','Grudzień'];

        return $odp[$x-1];
    }
?>
</body>
</html>