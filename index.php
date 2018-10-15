<?php
include('karta.class.php');
include('talia.class.php');

$talia = new Talia();
$losowaKarta = $talia->wezKarte();

echo '<pre>';
print_r($losowaKarta);

?>