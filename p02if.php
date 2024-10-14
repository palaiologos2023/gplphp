<?php
$aendiksi=253;
$bendiksi=292;
$diafora=$bendiksi-$aendiksi;
$xreosi=0;
if ($diafora>0 && $diafora<20){
	$xreosi=$diafora*1.2;
} else if ($diafora<40){
	$xreosi=20*1.2+($diafora-20)*1.8;
} else {
	$xreosi=20*1.2+20*1.8+($diafora-40)*2.1;
}
$fpa=($xreosi/100)*13;
$txreosi=$xreosi+$fpa;
echo "<h2>Η καταλάνωση νερού είναι $diafora κ.μ</h2>";
echo "<h2>H αξία της κατανάλωσης $xreosi ευρώ</h2>";
echo "<h2>Η αξία του ΦΠΑ είναι $fpa ευρώ</h2>";
echo "<h1>Η τελική χρέωση είναι $txreosi ευρώ</h1>";



?>