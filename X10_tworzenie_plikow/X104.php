<?php
// Norbert Kurzawski 3pir02
    echo "Numerowanie liczb zaczynamy od zera.<br>";

function binarne() {
    $p = fopen('napisy.txt','r');
    if($p) {
        $licznik = 0;
        while (($bin = fgets($p)) !== false) {
            $dec = bindec($bin);
            echo $licznik++." - ".$bin." - ".$dec."<br>";
        }
    } else
        echo "Nie udało się otworzyć pliku.";
}

    binarne();
?>
