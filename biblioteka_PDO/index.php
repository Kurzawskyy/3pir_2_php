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
<h1>Zadanie T16 - zastosowanie biblioteki PDO</h1>
<h2>Norbert Kurzawski 3pir_2</h2>
<h3>Ćwiczenie 6.31 - ćwiczenie z podręcznika</h3>
<p>Utwórz podobnie jak w ćwiczeniu 6.29 (z podręcznika) skrypt, który dane pobrane z formularza będzie dodawał w bazie 3pir2_biblioteka (zaimportuj ją z załączonego pliku biblioteka.sql) do tabeli autorzy. W skrypcie zastosuj polecenia mysqli zorientowanego obiektowo.</p>
<hr>

<h4>Wprowadź dane autora</h4>
<form action="index.php" method="post">
    <label for="imie">Podaj imię: </label>
    <input type="text" name="imie"> <br> <br>
    <label for="nazwisko">Nazwisko: </label>
    <input type="text" name="nazwisko"> <br><br>
    <input type="submit" name="send" value="Wyślij">
</form>

<?php
if(isset($_POST['send'])) {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=3pir2_biblioteka','root','');
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];

        $q = $pdo->query("INSERT INTO `autorzy`(`id`, `imie`, `nazwisko`) VALUES (null,'$imie','$nazwisko');");

        $q = $pdo->query('SELECT * FROM `autorzy`;');
        echo '<table>
                <tr>
                    <th>ID</th>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                </tr>
                ';
        foreach ($q as $wiersz) {
            echo "<tr><td>".$wiersz['id']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['nazwisko']."</td></tr>";
        }
        echo '</table>';
    } catch (PDOException $e) {
        echo 'Błąd połączenia: '.$e->getMessage();
        exit;
    }
}


?>

</body>
</html>