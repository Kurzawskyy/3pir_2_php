<?php
// Norbert Kurzawski 3pir02
    function czytaj() {
        $p = fopen('narodoweCzytanie.txt','r');
        if($p) {
            while(($linia = fgets($p)) !== false) {
                echo $linia."<br>";
            }
        } else
            echo "Nie udało się otworzyć pliku";
    }

  czytaj();
?>
