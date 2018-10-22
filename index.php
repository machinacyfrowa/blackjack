<?php
include('karta.class.php');
include('talia.class.php');
include('gracz.class.php');

$talia = new Talia();

$gracz = new Gracz($talia);
$gracz->dobierzKarte();

$krupier = new Gracz($talia);

echo '<pre>';
$gracz->obrocKarty();
//var_dump($rekaGracza);
echo '<br>Reka gracza<br>';
$gracz->pokazKarty();
echo '<br>Wartość ręki gracza:';
echo $gracz->punkty();


echo '<br>Reka krupiera<br>';
$krupier->pokazKarty();
echo '<br>Wartość ręki krupiera:';
echo $krupier->punkty();
?>