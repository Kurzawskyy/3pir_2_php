<?php
// Rozwiązanie zadania X11_2
// Norbert Kurzawski 3pir02
class Czolg {
    private $nazwa = "brak";
    private $kolor = "brak";
    public $amunicja = 0;

    function __construct($nazwa,$kolor,$amunicja) {
        $this->nazwa = $nazwa;
        $this->kolor = $kolor;
        $this->amunicja = $amunicja;
    }

    function info() {
//        $this->nazwa = $nazwa;
//        $this->kolor = $kolor;
//        $this->amunicja = $amunicja;
        echo "Cześć jestem czołgiem, trochę informacji o mnie: <br>Moja nazwa: $this->nazwa
<br>Mój kolor: $this->kolor<br>Stan mojej amunicji: $this->amunicja<br><br>";
    }

    function pomaluj($nowyKolor) {
        $this->kolor = $nowyKolor;
    }

    function zaladuj($ilosc) {
        if(is_numeric($ilosc)) {
            if($ilosc <= 0)
                echo "Sir, nie da rady załadować liczby pocisków równej zero lub na minusie!<br>";
            else {
                $this->amunicja += $ilosc;
                echo "Sir, amunicja została doładowana o liczbę $ilosc naboi, zgodnie z rozkazem! Obecny stan amunicji: $this->amunicja<br>";
            }
        } else
            echo "Nie mogę wykonać polecenia, sir! Rodzaj naboi nie wchodzi w podany typ i rodzaj, sir!<br>";
    }

    function strzelaj() {
        $amo = $this->amunicja;
        if($amo == 0) {
            echo "Amunicja równa 0, nie mogę wykonać strzału sir!<br>";
        } else {
            $amo--;
            echo "Strzał wykonany sir! Obecny stan amunicji: $amo<br>";
            $this->amunicja = $amo;
        }
    }

}

$szary = new Czolg("Szypki","drogi",15);
$szary->info();
$szary->pomaluj("najtańszy");
$szary->info();
$szary->strzelaj();
$szary->zaladuj(5);
$szary->strzelaj();
$szary->strzelaj();
$szary->strzelaj();
$szary->strzelaj();
$szary->info();
