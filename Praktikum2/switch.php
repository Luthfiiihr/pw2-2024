<?php
$grade= "C";
$keterangan = "";

switch ($grade) {
        case "A":
        $keterangan = "SLEBEW";
        break;
    case "B":
        $keterangan = "Mantap";
        break;
    case "C":
        $keterangan = "butut";
        break;
    case "D":
        $keterangan = "Noob";
        break;
    default:
        $keterangan = "Astagfirullah";
        break;

    }

echo "<h1>$keterangan</h1>";

