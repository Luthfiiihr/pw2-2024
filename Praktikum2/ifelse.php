<?php

$nilai = 90;
$keterangan = "";

if($nilai >= 90) {
    $keterangan = "Kelaz sir";
} elseif($nilai > 70 || $nilai <= 90) {
    $keterangan = "Mantep sir";
} else {
    $keterangan = "Kocak LO";
}

echo "<h1> $keterangan </h1>";