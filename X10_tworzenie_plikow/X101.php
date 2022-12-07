<?php
    touch('Norbert_Kurzawski.txt');
    touch('doSkasowania.txt');
    unlink('doSkasowania.txt');
    if(!is_dir('Kurzawski')) mkdir('Kurzawski');
    opendir('Kurzawski');
    touch('Norbert_Kurzawski.txt');
    $a = fread("Kurzawski/Norber_i_Kurzawski.txt","w");
?>
