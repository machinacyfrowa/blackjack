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
            $suma += $karta->punkty();
        }
        return $suma;
    }
}
?>