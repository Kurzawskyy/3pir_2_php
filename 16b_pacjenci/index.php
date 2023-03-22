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
<table>
    <tr>
        <th>Id</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Email</th>
    </tr>
<?php
// Norbert Kurzawski 3pir02
    $db = mysqli_connect('localhost','root','','3pir_2_pacjenci');
    $plik = fopen('dane.txt','r');

    while(!feof($plik)){
        $linia = fgets($plik);
        $ar = explode(',',$linia);
        $q = "INSERT INTO `tabela_1`(`id`, `imie`, `nazwisko`, `email`) VALUES (null,'$ar[0]','$ar[1]','$ar[2]')";
        mysqli_query($db,$q);
    }

    $q = "SELECT * FROM `tabela_1`";
    $wynik = mysqli_query($db,$q);
    while($el = mysqli_fetch_row($wynik)) {
        echo "<tr>
                <td>$el[0]</td>
                <td>$el[1]</td>
                <td>$el[2]</td>
                <td>$el[3]</td>
</tr>";
    }
    $db = mysqli_close($db);
?>
</table>
</body>
</html>