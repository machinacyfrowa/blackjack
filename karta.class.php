<?php
class Karta {
    //definiujemy atrybuty / zmienne w klasie
    public $wartosc = "";
    public $kolor = "";
    public $obrazekPrzod = "";
    public $obrazekTyl = "";
    public $kartaWidoczna = false;

    //konstruktor wywolujemy za kazdym razem jak robimy $cos = new Karta()
    function __construct($w, $k) {
        $this->wartosc = $w;
        $this->kolor = $k;
        $this->generujObrazki();
    }
    //generujemy url plikow z obrazkami
    function generujObrazki() {
        $this->obrazekPrzod .= 
            'img/'.$this->wartosc.$this->kolor.'.png';
        $this->obrazekTyl = 'img/tyl.png';
    }
    //zmieniamy widocznosc karty
    function obrocKarte() {
        $this->kartaWidoczna = !$this->kartaWidoczna;
    }
    //wyswietlamy karte
    function pokazKarte() {
        if($this->kartaWidoczna)
            echo '<img src="'.$this->obrazekPrzod.'">';
        else
            echo '<img src="'.$this->obrazekTyl.'">';
    }
    //zwraca wartość punktową karty
    function punkty() {
        switch($this->wartosc){
            case '0':
            case 'J':
            case 'Q':
            case 'K':
                return 10;
            case 'A':
                return 11;
            default:
                return intval($this->wartosc);
        }
    }
}
?>