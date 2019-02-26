<?php
    function luas_layanglayang($d1, $d2){
        return $d1 * $d2 * 1/2;
    }
    function keliling_layanglayang($nilaiA, $nilaiB){
        return $kel = 2*($nilaiA + $nilaiB);
    }
    $d1 = 15;
    $d2 = 25;
    $nilaiA = 5;
    $nilaiB = 10;
    echo "Luas layang-layang dengan diagonal $d1 dan $d2 = ";
    echo luas_layanglayang ($d1 , $d2);
    echo "<br>";
    echo "<br>";
    echo "Keliling layang-layang = ";
    echo keliling_layanglayang ($nilaiA , $nilaiB);
?>