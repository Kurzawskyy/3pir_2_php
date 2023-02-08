<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praca z bazą i plikiem</title>
    <style>
        table * {
            border: solid 1px black;
        }
        th {
            background-color: lightgrey;
        }
    </style>
</head>
<body>
<h1>Praca z bazą i plikiem</h1>
<h2>Norbert Kurzawski 3pir02</h2>
<ul>
    <li>Utwórz bazę danych o nazwie 3pir_2_baza_pracownikow.</li>
    <li>Do zadania dołączony został plik zawierający dane 114 pracowników - dokonaj konwersji tych danych do formaty txt (uzyskaj plik z danymi pracownicy.txt.</li>
    <li>Na utworzonej stronie projektu znajduje się przycisk "Utwórz tabelę", który w bazie 3pir_2_baza_pracownikow tworzy tabelę pracownicy.</li>
    <li>Drugi przycisk "Załaduj dane" dodaje dane z pliku tekstowego pracownicy.txt do tabeli pracownicy.</li>
    <li>Trzeci przycisk wyświetla dane z tabeli pracownicy w postaci tabelarycznej.</li>
</ul>
<hr>
<form action="index.php" method="post">
    <input type="submit" name="create" value="Utwórz tabelę"> <br><br>
    <input type="submit" name="upload" value="Załaduj dane"> <br><br>
    <input type="submit" name="show" value="Wyświetl dane"> <br><br>

</form>

<?php
$db = mysqli_connect('localhost','root','','3pir_2_baza_pracownikow');


if(isset($_POST['create'])) {
    $q = "CREATE TABLE pracownicy (Numer_id int, Nazwisko varchar(255),  Imię varchar(255),  Stanowisko varchar(255),  Dział varchar(255),  Sekcja varchar(255));";
    $wynik = mysqli_query($db,$q);
} else if(isset($_POST['upload'])) {
    $plik = fopen('pracownicy.txt','r');

    while(!feof($plik)) {
        $linia = fgets($plik);
        $arr = explode(';',$linia);

        $id = $arr[0];
        $nazwisko = $arr[1];
        $imie = $arr[2];
        $stanowisko = $arr[3];
        $dzial = $arr[4];
        $sekcja = $arr[5];

        $q = "INSERT INTO `pracownicy`(`Numer_id`, `Nazwisko`, `Imię`, `Stanowisko`, `Dział`, `Sekcja`) VALUES ('$id','$nazwisko','$imie','$stanowisko','$dzial','$sekcja');";
        $wynik = mysqli_query($db,$q);
    }
    fclose($plik);
} else if(isset($_POST['show'])){
    $q = "SELECT * FROM `pracownicy`;";
    $wynik = mysqli_query($db,$q);
    echo "<table>
            <tr>
                <th>Numer id</th>
                <th>Nazwisko</th>
                <th>Imię</th>
                <th>Stanowisko</th>
                <th>Dział</th>
                <th>Sekcja</th>
            </tr>";
    while($el = mysqli_fetch_row($wynik)) {
        echo "<tr>
                    <td>$el[0]</td>
                    <td>$el[1]</td>
                    <td>$el[2]</td>
                    <td>$el[3]</td>
                    <td>$el[4]</td>
                    <td>$el[5]</td>
              </tr>";
    }
    echo "</table>";
}
$db = mysqli_close($db);
?>
</body>
</html>