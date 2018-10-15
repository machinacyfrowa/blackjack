<?php
class Karta {
    public $wartosc = "";
    public $kolor = "";
    public $obrazekPrzod = "";
    public $obrazekTyl = "";
    public $kartaWidoczna = false;

    function __construct($w, $k) {
        $this->wartosc = $w;
        $this->kolor = $k;
        $this->generujObrazki();
    }
    function generujObrazki() {
        $this->obrazekPrzod .= 
            'img/'.$this->wartosc.$this->kolor.'.png';
        $this->obrazekTyl = 'img/tyl.png';
    }
    function obrocKarte() {
        $this->kartaWidoczna = !$this->kartaWidoczna;
    }
    function pokazKarte() {
        if($this->kartaWidoczna)
            echo '<img src="'.$this->obrazekPrzod.'">';
        else
            echo '<img src="'.$this->obrazekTyl.'">';
    }
}
?>