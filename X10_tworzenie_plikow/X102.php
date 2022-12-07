<?php
    $t = "W TYM ROKU NARODOWE CZYTANIE POD HONOROWYM PATRONATEM PARY PREZYDENCKIEJ ODBĘDZIE<br> SIĘ 08.09.2018 R. W STULECIE ODZYSKANIA NIEPODLEGŁOŚCI WYBRANO POWIEŚĆ STEFANA<br> ŻEROMSKIEGO „PRZEDWIOŚNIE”.<br> 
WŁĄCZAJĄC SIĘ DO OGÓLNOPOLSKIEJ AKCJI, ZAPRASZAMY DO WSPÓLNEGO CZYTANIA W NASZEJ<br> SZKOLE W PRZEDDZIEŃ TEGO WYDARZENIA 07.09.2018 R.<br> 
NA DRUGIEJ GODZINIE LEKCYJNEJ W AULI SZKOLNEJ. CZYTAĆ BĘDĄ UCZNIOWIE KLASY 2M.<br>
FORMUŁA SPOTKANIA NIE JEST ZAMKNIĘTA – KAŻDY MOŻE PRZYŁĄCZYĆ SIĘ DO CZYTANIA LUB<br> SŁUCHANIA.";

    touch('narodoweCzytanie.txt');
    //$p = fopen('narodoweCzytanie.txt','w');

    function czytaj($t) {
        if(!$p = fopen('narodoweCzytanie.txt','w'))
            echo "Nie można odczytać pliku.";
        else {
            if(fwrite($p,$t) === false)
                echo "Zapis do pliku nie powiódł się.";
            else
                echo $t;
        }
        fclose($p);
    }

  czytaj($t);
?>
