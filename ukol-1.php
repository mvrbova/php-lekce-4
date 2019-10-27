<?php

echo 'Historie přístupů:<br>';

$handle = @fopen ('pristupy.txt', 'r');

if ($handle === false) {
    echo 'Soubor neexistuje.';
} else {
    echo fread($handle, 1000);
    fclose($handle);

$handle = @fopen ('pristupy.txt', 'a');
fwrite($handle, date('Y-m-d H:i:s'));
fclose($handle);
}
?>