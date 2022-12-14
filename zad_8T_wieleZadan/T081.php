<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TO 1</title>
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

    <h1>Zadanie T081</h1>
    <p>Napisz funkcję, która dla podanej liczby zwraca (return) jej wartość bezwzględną i zastosuj tę funkcję do wyświetlenia wyniku. Do obliczenia wartości bezwzględnej użyj instrukcji warunkowej (wariant 1) i operatora warunkowego "?" (wariant 2).</p>
    <hr>

    <form action="T081.php" method="post">
        <label for="wart">Podaj wartość liczbową: </label>
        <input name="wart" type="text">
        <input type="submit" value="Wyślij"> <br> <br>
    </form>

    <?php
        if(isset($_POST['wart'])) {
            $wart = $_POST['wart'];
            if(is_numeric($wart)) {
                echo "Wartość bezwzględna podanej liczby to: <br>";
                echo "Wariant 1: ".bezwzgledna($wart);
                echo "<br>Wariant 2: ".bezwzTenary($wart);
            } else
                echo "Podana wartośc musi być numeryczna.";
        }

        function bezwzgledna($x) {
            if($x < 0) return -$x;
            return $x;
        }
        function bezwzTenary($x) {
            return $x < 0 ? -$x : $x;
        }
    ?>
</body>
</html>