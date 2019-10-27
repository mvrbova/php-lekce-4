<?php

function minimum($a, $b) {
    if (!is_numeric($a) || !is_numeric($a)) {
        return false;
    } elseif ($a < $b) {
        return $a;
    } else {
        return $b;
    };
    echo '<br>';
}

$vysledek = minimum(56, 'xy');
if ($vysledek === false) {
    echo 'Chyba';
} else {
    echo $vysledek;
};
>?
