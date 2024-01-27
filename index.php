<?php

/* Exercice 3 : Dangerous animals
Please find some data about various animals dangerosity
    🐻 600kg, carnivorous => dangerous
    🐑 60kg, not carnivorous => not dangerous
    🐘 1200kg, not carnivorous => dangerous
    🦔 1kg, carnivorous => not dangerous
    🐇 3kg, not carnivorous => not dangerous
    🦖 8000kg, carnivorous => dangerous
Create a condition to determine if an animal is dangerous or not. The rules are :
    dangerous if the animal is carnivorous AND weights more than 50kg, OR if it weights more than 1000kg. Display 'Ouch, you should run !'
    In all other case, display 'It is gentle as a lamb 🐑'
 */

 function isItDangerous($kilos, $isCarnivorous) {
    if ($kilos > 50 && $isCarnivorous || $kilos > 1000) {
        $result = 'Ouch, you should run !';
    } else {
        $result = 'It is gentle as a lamb 🐑';
    }
    return $result;
 }

$isCarnivorous = false;
$weight = 600;

echo isItDangerous($weight, $isCarnivorous);
