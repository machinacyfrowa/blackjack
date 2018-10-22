<?php
include('karta.class.php');
include('talia.class.php');

$talia = new Talia();

$rekaGracza = array();
array_push($rekaGracza, $talia->wezKarte());
$rekaGracza[0]->obrocKarte();
array_push($rekaGracza, $talia->wezKarte());
$rekaGracza[1]->obrocKarte();

$rekaKrupiera = array();
array_push($rekaKrupiera, $talia->wezKarte());
array_push($rekaKrupiera, $talia->wezKarte());

echo '<pre>';
//var_dump($rekaGracza);
echo '<br>Reka gracza<br>';
foreach($rekaGracza as $kartaGracza) {
    $kartaGracza->pokazKarte();
}
echo '<br>Reka krupiera<br>';
foreach($rekaKrupiera as $kartaKrupiera) {
    $kartaKrupiera->pokazKarte();
}

?>