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
<form action="index.php">
    <input type="submit" name="create" value="Utw�rz tabel�"> <br>
    <input type="submit" name="upload" value="Za�aduj dane"> <br>
    <input type="submit" name="show" value="Wy�wietl dane"> <br>

</form>

<?php
    $db = mysqli_connect('localhost','root','','3pir_2_baza_pracownikow');




    if(isset($_POST['create'])) {
        $q = 'CREATE TABLE pracownicy (Numer_id int, Nazwisko varchar(255),  Imi� varchar(255),  Stanowisko varchar(255),  Dzia� varchar(255),  Sekcja varchar(255));';
        $wynik = mysqli_query($db,$q);
    } else if(isset($_POST['upload'])) {
        $plik = fopen('pracownicy.csv','r');

        $z = '';
        while(!feof($plik)) {
            $linia = fgets($plik);
            $z .= $linia;
            echo $z."<br>";
        }
    } else {

    }
?>
</body>
</html>
