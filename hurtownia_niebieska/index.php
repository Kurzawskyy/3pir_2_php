<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hurtownia papiernicza</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <main>
        <header>
            <h1>W naszej hurtowni kupisz najtaniej</h1>
        </header>
        <section>
            <article class="left">
                <h3>Ceny wybranych artykułów w hurtowni:</h3>
<!--                skr 1-->
                <?php
                    $db = mysqli_connect('localhost','root','','3pir2_sklep');
                    $q = "SELECT `nazwa`,`cena` FROM `towary` WHERE `id` <= 4;";
                    $wynik = mysqli_query($db,$q);
                    echo "<table style='border: 1px yellow solid'>";
                    while($el = mysqli_fetch_row($wynik)) {
                        echo "<tr style='border: yellow 1px solid'><td style='border: 1px yellow solid'>".$el[0]."</td><td>".$el[1]."</td></tr>";
                    }
                    echo "</table>";
                ?>
            </article>
            <article class="center">
                <h3>Ile będą kosztować Twoje zakupy?</h3> <br>
                <form action="index.php" method="post">
                    <label for="artykuly">wybierz artykuł </label>
                    <select name="artykuly">
                        <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                        <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                        <option value="Cyrkiel">Cyrkiel</option>
                        <option value="Linijka 30cm">Linijka 30cm</option>
                        <option value="Ekierka">Ekierka</option>
                        <option value="Linijka 50cm">Linijka 50cm</option>
                    </select> <br>
                    <label for="licz">liczba sztuk: </label>
                    <input type="number" name="licz" value="1" id="licz"> <br>
                    <input type="submit" value="Oblicz" name="oblicz">
                </form>
<!--                skr 2-->

                <?php
                if(isset($_POST['oblicz'])) {
                    $wybor = $_POST['artykuly'];
                    $ilosc = $_POST['licz'];
                    $q = "SELECT `cena` FROM `towary` WHERE `nazwa` = '$wybor';";
                    $wynik = mysqli_query($db,$q);
                    while($el = mysqli_fetch_row($wynik)) {
                        $resultat = $el[0] * $ilosc;
                        echo "<br>".round($resultat,1);
                    }
                }

                    $db = mysqli_close($db);
                ?>
            </article>
            <article class="right">
                <img src="zakupy2.png" alt="hurtownia">
                <h3>Kontakt</h3>
                <p>telefon: <br>111222333 <br>e-mail: <br><a href="mailto:hurt@wp.pl">hurt@wp.pl</a></p>
            </article>
        </section>
        <footer>
            <h4>Witrynę wykonał Norbert Kurzawski 3pir02</h4>
        </footer>
    </main>
</body>
</html>