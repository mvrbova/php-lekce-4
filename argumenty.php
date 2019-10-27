<?php

function vypisPozdrav($denniDoba, $osloveni = 'člověku') {
    echo "Dobré $denniDoba, $osloveni!";
}

function vypocti($a, $b, $c) {
    echo $a + $b + $c;
}
$denniDoba = 'ráno';

vypisPozdrav($denniDoba, 'Karle');
// vypíše: Dobré ráno, Karle!
