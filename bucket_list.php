<?php
$arr = array();
echo "Hoe veel activiteiten wil je toevoegen?".PHP_EOL;
$input = readline();
if (is_numeric($input)) {
for ($i = 0; $i < intval($input); $i++) {
    echo "Wat wil je op jouw bucket list?".PHP_EOL;
    $e = readline();
    array_push($arr, $e);
}echo "Op jouw bucket list staat:".PHP_EOL;
    foreach ($arr as $j) {
        echo "> $j";
    }
}
else {
    echo "bruh de bruhhhhHH".PHP_EOL;
}