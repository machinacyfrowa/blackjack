<?php
class Talia {
    public $wartosci = array('0', '2', '3', '4' ,'5', '6', '7', '8', '9', 'J', 'Q', 'K', 'A');
    public $kolory = array('C', 'D', 'H', 'S');
    public $karty = array();

    function __construct() {
        $this->stworzTalie();
        $this->tasuj();
    }
    function stworzTalie() {
        foreach ($this->wartosci as $wartosc) {
            foreach ($this->kolory as $kolor) {
                $karta = new Karta($wartosc, $kolor);
                array_push($this->karty, $karta);
            }
        }
    }
    function tasuj() {
        $potasowane = array();
        while(count($this->karty) > 0) {
            $r = rand(0, count($this->karty) - 1);
            array_push($potasowane, $this->karty[$r]);
            array_splice($this->karty, $r, 1);
        }
        $this->karty = $potasowane;
    }
    function wezKarte() {
        if(count($this->karty) == 0) {
            $this->stworzTalie();
            $this->tasuj();
        }
        return array_splice($this->karty, 0, 1);
    }
}
?>