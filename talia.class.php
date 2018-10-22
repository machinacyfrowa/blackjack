<?php
class Talia {
    //definicje atrybutow
    public $wartosci = array('0', '2', '3', '4' ,'5', '6', '7', '8', '9', 'J', 'Q', 'K', 'A');
    public $kolory = array('C', 'D', 'H', 'S');
    public $karty = array();

    //konstruktor
    function __construct() {
        $this->stworzTalie();
        $this->tasuj();
    }
    //tworzy poukładaną (nie przetasowaną) talię
    function stworzTalie() {
        foreach ($this->wartosci as $wartosc) {
            foreach ($this->kolory as $kolor) {
                $karta = new Karta($wartosc, $kolor);
                array_push($this->karty, $karta);
            }
        }
    }
    //losowo tasuje karty w talii
    function tasuj() {
        $potasowane = array();
        while(count($this->karty) > 0) {
            $r = rand(0, count($this->karty) - 1);
            array_push($potasowane, $this->karty[$r]);
            array_splice($this->karty, $r, 1);
        }
        $this->karty = $potasowane;
    }
    //wez karte z talii (usuwa ją z talii)
    function wezKarte() {
        if(count($this->karty) == 0) {
            $this->stworzTalie();
            $this->tasuj();
        }
        return array_splice($this->karty, 0, 1)[0];
    }
}
?>