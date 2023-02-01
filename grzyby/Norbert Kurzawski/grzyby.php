<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grzybobranie</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
<?php
    $db = mysqli_connect('localhost','root','','3pir_dane2');
?>
    <main>
        <header>
            <div class="miniatura"><a href="borowik.jpg"><img src="borowik-miniatura.jpg" alt="Grzybobranie"></a> </div>
            <div class="tytulowy"><h1>Idziemy na grzyby!</h1></div>
        </header>

        <section>
            <article class="skr1">
                <?php
                    $q = 'SELECT nazwa_pliku,potoczna FROM grzyby;';
                    $wynik = mysqli_query($db,$q);
                    while($el = mysqli_fetch_row($wynik)) {
                        echo "<img src='$el[0]' title='$el[1]'>";
                    }
                ?>
            </article>
            <article class="skr2">
                <h2>Grzyby jadalne</h2>
                <?php
                    $q = 'SELECT nazwa,potoczna FROM grzyby WHERE jadalny=1;';
                    $wynik = mysqli_query($db,$q);
                    while($el = mysqli_fetch_row($wynik)) {
                        echo "<p>".$el[0]." (".$el[1].")"."</p>";
                    }
                ?>
                <h2>Polecamy do sosów</h2>
                <?php
                    $q = 'SELECT grzyby.nazwa,grzyby.potoczna,rodzina.nazwa FROM grzyby INNER JOIN rodzina ON grzyby.rodzina_id=rodzina.id WHERE grzyby.potrawy_id = 1;';
                    $wynik = mysqli_query($db,$q);
                    echo "<ol>";
                    while($el = mysqli_fetch_row($wynik)) {
                        echo "<li>".$el[0]." (".$el[1]."), rodzina: ".$el[2]."</li>";
                    }
                    echo "</ol>";
                ?>
                <?php

                    $db = mysqli_close($db);
                ?>
            </article>
        </section>

        <footer>
            <p class="f">Autor: Norbert Kurzawski 3pir02</p>
        </footer>
    </main>
</body>
</html>