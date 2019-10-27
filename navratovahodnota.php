<?php

function maximum($a, $b) {
    if ($a > $b) {
        return $a;
        } else {
        return $b;
        }

    return 50;

    }


echo maximum(304, 560);
echo '<br>';
maximum(7.2, 7.1);
echo '<br>';
maximum(23, 23);
echo '<br>';
maximum(253, 'x');
?>
