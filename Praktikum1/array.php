<?php
$animal = ["Cat", "Dog", "Tiger", "Bird", "Bunny"];
echo $animal[0] . "<br>";
echo $animal[2] . "<br>";
echo "<br>";

//untuk memnaggil semua nilai variable
foreach ($animal as $key => $value ){
    echo $value . "<br>";
}
echo "<br>";

//untuk menambah nilai variable
$animal[2] = "Lion";
echo $animal[2] . "<br>";

//echo adalah perintah