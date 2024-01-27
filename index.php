<?php

$peanutStock = 12 ;
/* Met à jour le stock 🥜 en utilisant le bon opérateur et affiche-le pour chaque étape.
    🐘 mange 1 🥜, décrémente ton stock
    🐷 a très faim, il en mange 8 🥜, décrémente ton stock
    🐿️ recharge 3 🥜 de son stock d'hiver
    🐵 te fait une blague, et cache la moitié du reste 🥜, décrémente ton stock.
    🐘🐷🐿️ sont en colère contre 🐵. Les pauvres 🐵 devraient multiplier le stock par 3 pour se faire pardonner. */

    $peanutStock--;
    echo $peanutStock . ' ';
    $peanutStock+=8;
    echo $peanutStock . ' ';
    $peanutStock +=3;
    echo $peanutStock . ' ';
    $peanutStock -= $peanutStock /2;
    echo $peanutStock . ' ';
    $peanutStock *= 3;
    echo $peanutStock . ' ';
