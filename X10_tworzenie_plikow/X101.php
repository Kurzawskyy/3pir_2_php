<?php
// Norbert Kurzawski 3pir02
    touch('Norbert_Kurzawski.txt');
    touch('doSkasowania.txt');
    unlink('doSkasowania.txt');
    if(!is_dir('Kurzawski')) mkdir('Kurzawski');

    touch('Kurzawski/Norbert_Kurzawski.txt');
?>
