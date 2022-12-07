<?php
// Norbert Kurzawski 3pir02
    $tab = [5,2,1,9,8,6,3,17,7,10];

    function naj($x) {
        sort($x);

        return $x[0] + $x[1];
    }

    echo naj($tab);
?>
