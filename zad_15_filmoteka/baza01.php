<?php
    $db = mysqli_connect("localhost","root","","3pir_dane");

    $kw1 = "SELECT tytul,rok,ocena FROM filmy WHERE gatunki_id='5';";

    $wynik = mysqli_query($db,$kw1);

    while($el = mysqli_fetch_row($wynik))
        echo $el[0].", ".$el[1].", ".$el[2]."<br>";


    $kw = "SELECT * FROM rezyserzy;";
    $wynik = mysqli_query($db,$kw);

    echo "<ul>";
    while($el = mysqli_fetch_row($wynik))
        echo "<li>".$el[0]."-".$el[1]."-".$el[2]."</li>";
    echo "</ul>";

    echo "<br>";

    $kw2 = "SELECT filmy.id,filmy.tytul,rezyserzy.imie,rezyserzy.nazwisko FROM filmy INNER JOIN rezyserzy ON filmy.rezyserzy_id=rezyserzy.id;";

    $wynik = mysqli_query($db,$kw2);
    while($el = mysqli_fetch_row($wynik))
        echo $el[0]." ".$el[1]." - ".$el[2]." ".$el[3]."<br>";

    echo "<br><br>";

    $kw3 = "SELECT id,tytul FROM filmy WHERE rok='2017' AND ocena=6;";

    $wynik = mysqli_query($db,$kw3);
    while($el = mysqli_fetch_row($wynik))
        echo $el[0].". ".$el[1]."<br>";

    echo "<br><br>";

    $kw4 = "UPDATE rezyserzy SET imie='Francis Ford' WHERE id=8;";
    $wynik = mysqli_query($db,$kw4);

    $kwN = "INSERT INTO rezyserzy VALUES(null,'Norbert','Kurzawski');";
    $wynik = mysqli_query($db,$kwN);


    mysqli_close($db);
