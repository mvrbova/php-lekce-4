<?php

function maximum($a, $b) {
    if (!is_numeric($a) || !is_numeric($a)) {
        echo 'Chyba"';
    } elseif ($a > $b) {
            echo $a;
        } else {
            echo $b;
        };
    echo '<br>';
    }

    maximum(304, 560);
    echo '<br>';
    maximum(7.2, 7.1);
    echo '<br>';
    maximum(23, 23);
    echo '<br>';
    maximum(253, 'x');
    ?>


