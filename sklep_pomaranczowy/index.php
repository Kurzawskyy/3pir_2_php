<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sklep papierniczy</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <main>
        <header>
            <h1>W naszym sklepie internetowym kupisz
                najtaniej</h1>
        </header>

        <section>
            <article class="left">
                <h3>Promocja 15% obejmuje artykuły:</h3>
                <?php
                    $db = mysqli_connect('localhost','root','','3pir2_sklep');
                    $q = "SELECT nazwa FROM towary WHERE promocja = 1;";
                    $wynik = mysqli_query($db, $q);

                    echo "<ul>";
                    while($el = mysqli_fetch_row($wynik))
                        echo "<li>".$el[0]."</li>";
                    echo "</ul>";
                ?>
            </article>

            <article class="center">
                <h3>Cena wybranego artykułu w promocji</h3>
                <form action="index.php" method="post">
                    <select name="produkty">
                        <option value="Gumka do mazania">Gumka do mazania</option>
                        <option value="Cienkopis">Cienkopis</option>
                        <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                        <option value="Markery 4 szt.">Markety 4 szt.</option>
                    </select>
                    <input name="wyslij" type="submit" value="WYBIERZ">
                </form>
                <?php
                if(isset($_POST['wyslij'])) {
                    $wybor = $_POST['produkty'];
                    $q = "SELECT cena FROM towary WHERE nazwa = '".$wybor."';";
                    $wynik = mysqli_query($db,$q);

                    while($el = mysqli_fetch_row($wynik))
                        echo round($el[0] * 0.85,2);

                }

                $db = mysqli_close($db);
                ?>
            </article>

            <article class="right">
                <h3>Kontakt</h3>
                <p>telefon: 123123123 <br>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
                <img src="promocja2.png" alt="promocja">
            </article>
        </section>

        <footer>
            <h4>Autor strony Norbert Kurzawski 3pir02</h4>
        </footer>
    </main>
</body>
</html>
