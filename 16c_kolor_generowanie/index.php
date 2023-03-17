<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border: 1px solid black;border-collapse: collapse;
        }
        th,tr,td {
            border: 1px solid black;
            padding: 10px
        }
    </style>
</head>
<body>
<!--Norbert Kurzawski 3pir02-->
    <table>
        <tr>
            <th>ID</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>email</th>
            <th>Płeć</th>
            <th>IP adres</th>
        </tr>
        <?php
            $db = mysqli_connect('localhost','root','','3pir_02_pracownicy_w_kolorze');
            $q = "SELECT * FROM `pracownicy`;";
            $wynik = mysqli_query($db,$q);

            while($el = mysqli_fetch_row($wynik)) {
                echo "<tr style='background-color: $el[6]'>";
                    for($i = 0; $i < 6; $i++)
                        echo "<td>$el[$i]</td>";
                    echo "</tr>";
            }
        ?>
    </table>
</body>
</html>