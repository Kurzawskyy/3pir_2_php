<?php
// Norbert Kurzawski 3pir02
    function podajDate() {
        $teraz = getdate();

        $d = $teraz['mday'];
        $m = "";
        $r = $teraz['year'];
        switch ($teraz['month']) {
            case 'January':
                $m = "styczeń";
                break;
            case 'February':
                $m = "Luty";
                break;
            case 'March':
                $m = "Marzec";
                break;
            case 'April':
                $m = "Kwiecień";
                break;
            case 'May':
                $m = "Maj";
                break;
            case 'June':
                $m = "Czerwiec";
                break;
            case 'July':
                $m = "Lipiec";
                break;
            case 'August':
                $m = "Sierpień";
                break;
            case 'September':
                $m = "Wrzesień";
                break;
            case 'October':
                $m = "Październik";
                break;
            case 'November':
                $m = "Listopdad";
                break;
            case 'December':
                $m = "Grudzień";
                break;
            default:
                "Błąd";
        }

        return $d." ".$m." ".$r;
    }

    echo podajDate();
?>
