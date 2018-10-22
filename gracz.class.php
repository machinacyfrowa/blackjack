<?php
class Gracz {
    public $karty = array();

    public function punty() {
        $suma = 0;
        foreach($karty as $karta) {
            $suma += $karta->punkty();
        }
        return $suma;
    }
}
?>