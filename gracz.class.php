<?php
class Gracz {
    public $karty = array();
    public $talia;

    function __construct($t) {
        $this->talia = $t;
        $this->dobierzKarte();
        $this->dobierzKarte();
    }
    public function dobierzKarte() {
        array_push($this->karty,
                $this->talia->wezKarte());
    }
    public function obrocKarty() {
        foreach($this->karty as $karta) {
            $karta->obrocKarte();
        }
    }
    public function pokazKarty() {
        foreach($this->karty as $karta) {
            $karta->pokazKarte();
        }
    }
    public function punkty() {
        $suma = 0;
        foreach($this->karty as $karta) {
            //jeżeli dobranie asa powoduje przekroczenie 21 to policz
            //asa za 1
            if($suma + $karta->punkty() > 21) {
                $suma += 1;
            } else {
                $suma += $karta->punkty();
            }
        }
        return $suma;
    }
}
?>