<?php

$handle = @fopen ('soubor.txt', 'r');

    if ($handle === false) {
        echo 'Soubor neexistuje.';
    } else {
        var_dump($handle);
        fclose($handle);
    }
?>

<?php

$handle = @fopen ('soubor.txt', 'w');

    if ($handle === false) {
        echo 'Soubor neexistuje.';
    } else {
        fwrite($handle, 'ahoj lidi')
        fclose($handle);
    }
?>

// zápis do souboru:
<?php

$handle = @fopen ('soubor.txt', 'a');

if ($handle === false) {
    echo 'Soubor neexistuje.';
} else {
    fwrite($handle, "na novy radek.\n")
    fclose($handle);
    }
?>

// čtení ze souboru
<?php

$handle = @fopen ('soubor.txt', 'r');

if ($handle === false) {
    echo 'Soubor neexistuje.';
} else {
    $text= fread($handle, 1000);
    var_dump();

    fclose($handle);
    }
?>
