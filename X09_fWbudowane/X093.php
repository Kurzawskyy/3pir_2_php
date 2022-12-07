<?php
// Norbert Kurzawski 3pir02
    $tab1 = [1,5,9,7,5,3,6,11,25,8];
    $tab2 = [8,4,7,25,3,5,78,14,33];

    function polacz($t1,$t2) {
        $tab = array_merge($t1,$t2);
        sort($tab);
        return $tab;
    }

    print_r(polacz($tab1,$tab2));
?>
