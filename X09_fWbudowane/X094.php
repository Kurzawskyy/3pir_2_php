<?php
// Norbert Kurzawski 3pir02
    function sprawdzaj($d,$m,$r) {
        if(checkdate($m,$d,$r)) {
            $teraz = getdate();

            if($r < $teraz['year']) return "historia";
            else if($r > $teraz['year']) return "teraźniejszość i przyszlość";
            else {
                if($m < $teraz['mon']) return "historia";
                else if($m > $teraz['mon']) return "teraźniejszość i przyszłość";
                else {
                    if($d < $teraz['mday']) return "historia";
                    else if($d > $teraz['mday']) return "teraźniejszość i przyszłość";
                    else return "Daty są równe - podana została dzisiejsza data";
                }
            }
        } else {
            return "data została podana błędnie";
        }
    }

    echo sprawdzaj(7,12,2023);
?>
