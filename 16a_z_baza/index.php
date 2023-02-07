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
<form action="index.php" method="post">
    <input type="submit" name="create" value="Utwórz tabelę"> <br>
    <input type="submit" name="upload" value="Załaduj dane"> <br>
    <input type="submit" name="show" value="Wyświetl dane"> <br>

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
        // do tego działa
//        $arr[] = explode(';',$linia);
//        echo implode("",$arr[1]);
//        $q = "INSERT INTO `pracownicy`(`Numer_id`, `Nazwisko`, `Imię`, `Stanowisko`, `Dział`, `Sekcja`) VALUES ($arr[0],$arr[1],$arr[2],$arr[3],$arr[4],$arr[5]);";
//        $wynik = mysqli_query($db,$q);
    }
} else {

}
$db = mysqli_close($db);
?>
</body>
</html>