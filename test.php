<?php

//echo "{$jmeno} <br/> {$vzkaz}";


//otevře a přečte soubor
$handle = @fopen('prispevky.txt', 'r');

if ($handle === false) {
    echo 'Žádné příspěvky';
} else {
    var_dump($handle);
    fclose($handle);
}

// vloží jméno a vzkaz
$jmeno = $_POST['name'];
$vzkaz = $_POST['vzkaz'];

$handle = @fopen('prispevky.txt', 'a');

if ($handle === true) {
    echo 'Vzkaz byl uložen.' . '<a href ="navstevni-kniha.php">"Vrátit se zpět na návštěvní knihu."</a>';

} else {
    fwrite($handle, "na novy radek.\n");
    fclose($handle);
}
//echo "{$jmeno} <br/> {$vzkaz}";

