<?php

$antwoorden = 0;

$land["Korea"] = "Korea";
$hoofdstad["Korea"] = "Seoul";

$land["China"] = "China";
$hoofdstad["China"] = "Shangai";

$land["Nigeria"] = "Nigeria";
$hoofdstad["Nigeria"] = "Lagos";

$land["Japan"] = "Japan";
$hoofdstad["Japan"] = "Tokyo";

$land["Mexico"] = "Mexico";
$hoofdstad["Mexico"] = "Mexico City";

$land["USA"] = "USA";
$hoofdstad["USA"] = "Washington D.C";

$land["India"] = "India";
$hoofdstad["India"] = "Mumbai";

$land["Argentina"] = "Argentina";
$hoofdstad["Argentina"] = "Buenos Aires";

$land["Egypt"] = "Egypt";
$hoofdstad["Egypt"] = "Cairo";

$land["UK"] = "UK";
$hoofdstad["UK"] = "London";

foreach ($land as $yeet) {
    echo "Wat is de hoofdstad van ". $yeet;
    echo "?\n";
    $antwoord = readline();
    if ($hoofdstad[$yeet] == $antwoord) {
        echo "NAIISSUUUU <3 <3 <3\n";
        $antwoorden++;
    } else {
        echo "NOPE, $antwoord is niet de hoofdstad van $yeet bish.\n";
        echo "Het antwoord is ". $hoofdstad[$yeet] . PHP_EOL;
    }

}

echo "\nJe heb er $antwoorden boi";
if ($antwoorden = 10) {
    echo "\n\n ACUUUU <3!";

}