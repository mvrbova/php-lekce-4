<?php

$handle = fopen('soubor.txt', 'r');
if ($handle) {
    while (($line = fgets($handle, 4096)) !== false) {
        echo $line . "<br>"; // zde se vypíše jeden řádek souboru
    }
    fclose($handle);
}
?>;
