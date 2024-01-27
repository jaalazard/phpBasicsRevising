<?php

/* Exercice 2 : Biodiversity protection
Biodiversity is in danger.
    🐱 : 1000000000 individuals
    🐼 : 1000 individuals
    🐘 : 150 individuals
    🦖 : 0 individual
Create a condition to display the correct threat status according to a species population.
if the animal population is zero, animal is extinct
if the animal population is < 200, animal is critically endangered
if the animal population is < 3000, animal is threatened
more >= 3000, population is not threatened. */

function getStatus($animalPopulation) {
if ($animalPopulation === 0) {
    $status = "extinct";
} elseif ($animalPopulation > 0 && $animalPopulation < 200) {
    $status = "critically endangered";
} elseif ($animalPopulation > 200 && $animalPopulation < 3000) {
    $status = "threatened";
} else {
    $status = "not threatened";
}
return $status;
}
  

echo getStatus(8000);