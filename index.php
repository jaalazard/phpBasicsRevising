<?php

/* Exercise 3 : planting a forest
You know how to plant a row of trees 🌳🌳🌳🌳🌳🌳🌳🌳🌳.
But you see bigger, and you want now to plant a whole forest.
    Using 2 nested loops, display a forest of 8 columns and 3 rows.
    You should obtain
    🌳🌳🌳🌳🌳🌳🌳🌳
    🌳🌳🌳🌳🌳🌳🌳🌳
    🌳🌳🌳🌳🌳🌳🌳🌳
    Bigger now ! Display a forest of 40 columns and 25 rows.
    Create a forest of 10 columns and 5 rows, with alternate types of trees in each row, as below. 
🌳🌳🌳🌳🌳🌳🌳🌳🌳🌳
🌲🌲🌲🌲🌲🌲🌲🌲🌲🌲
🌳🌳🌳🌳🌳🌳🌳🌳🌳🌳
🌲🌲🌲🌲🌲🌲🌲🌲🌲🌲
🌳🌳🌳🌳🌳🌳🌳🌳🌳🌳
    Create a forest of 7 columns and 8 rows, with alternate types of trees in each column
    🌳🌲🌳🌲🌳🌲🌳
    🌳🌲🌳🌲🌳🌲🌳
    🌳🌲🌳🌲🌳🌲🌳
    🌳🌲🌳🌲🌳🌲🌳
    🌳🌲🌳🌲🌳🌲🌳
    🌳🌲🌳🌲🌳🌲🌳
    🌳🌲🌳🌲🌳🌲🌳
    🌳🌲🌳🌲🌳🌲🌳 */

    $width = 8;
    $height = 3;

    for ($i = 0; $i < $height; $i++) {
    for ($j = 0; $j < $width; $j++) {
        echo '🌳';
        }
        echo PHP_EOL;
    }

    echo PHP_EOL;

    $width = 40;
    $height = 25;

    for ($i = 0; $i < $height; $i++) {
    for ($j = 0; $j < $width; $j++) {
        echo '🌳';
        }
        echo PHP_EOL;
    }

    echo PHP_EOL;


    $width = 10;
    $height = 5;

    for ($i = 0; $i < $height; $i++) {
    for ($j = 0; $j < $width; $j++) {
        if ($i %2 === 0) {
        echo '🌳';
        } else {
            echo '🌲';
        }
    }
        echo PHP_EOL;
    }

    echo PHP_EOL;

    $width = 7;
    $height = 8;

    for ($i = 0; $i < $height; $i++) {
    for ($j = 0; $j < $width; $j++) {
        if ($j %2 === 0) {
        echo '🌳';
        } else {
            echo '🌲';
        }
    }
        echo PHP_EOL;
    }

    echo PHP_EOL;
