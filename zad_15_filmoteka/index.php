<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filmoteka</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>


    <main>
        <header>
            <div><img src="klaps.png" alt="Nasze filmy"></div>
            <div><h1>BAZA FILMÓW</h1></div>
            <div>
                <form action="index.php" method="post">
                    <select name="kategorie" id="kategorie">
                        <option value="Sci-Fi">Sci-Fi</option>
                        <option value="animacja">animacja</option>
                        <option value="dramat">dramat</option>
                        <option value="horror">horror</option>
                        <option value="komedia">komedia</option>
                    </select>
                    <input type="submit" value="Filmy">
                </form>
            </div>
            <div><img src="gwiezdneWojny.jpg" alt="szturmowcy"></div>
        </header>
        
        <section>
            <article>
                <h2>Wybrano filmy</h2>
                <?php
                    if(isset($_POST['kategorie'])) {
                        $db = mysqli_connect("localhost", "root", "", "3pir_filmoteka");

                        $k = $_POST['kategorie'];
                        $q = "SELECT filmy.tytul,filmy.rok,filmy.ocena FROM filmy INNER JOIN gatunki ON gatunki.id = filmy.gatunki_id WHERE nazwa = '$k';";
                        $wynik = mysqli_query($db,$q);

                        echo "<br>";
                        while($el = mysqli_fetch_row($wynik))
                            echo "<p>"."Tytuł: ".$el[0].", Rok produkcji: ".$el[1].", Ocena: ".$el[2]."</p>"."<br>";

                        mysqli_close($db);
                    }
                ?>
            </article>
            <article>
                <h2>Wszystkie filmy</h2>
                <?php
                    $db = mysqli_connect("localhost", "root", "", "3pir_filmoteka");

                    $q = "SELECT filmy.id, filmy.tytul, rezyserzy.imie, rezyserzy.nazwisko FROM filmy INNER JOIN rezyserzy ON filmy.rezyserzy_id = rezyserzy.id;";
                    $wynik = mysqli_query($db,$q);

                    echo "<br>";
                    while($el = mysqli_fetch_row($wynik))
                        echo "<p>".$el[0].". ".$el[1].", reżyseria: ".$el[2]." ".$el[3]."</p><br>";

                    mysqli_close($db);
                ?>
            </article>
        </section>

        <footer>
            <p>Autor: Norbert Kurzawski 3pir02</p>
            <a href="kwerendy.txt">Zapytania do bazy</a>
            <a href="https://filmy.pl/" target="_blank">Przejdź do filmy.pl</a>
        </footer>
    </main>
</body>
</html>