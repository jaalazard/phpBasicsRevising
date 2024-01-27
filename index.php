<?php

/* Exercise 4 : planting triangle forest
You can not always plant rectangle shape forest.
    Create loops to display this triangle shape forest (one more 🌳 in each new line).
    🌳
    🌳🌳
    🌳🌳🌳
    🌳🌳🌳🌳
    🌳🌳🌳🌳🌳
    Create loops to display this other triangle shape forest (from largest to shortest line).
    🌳🌳🌳🌳🌳
    🌳🌳🌳🌳
    🌳🌳🌳
    🌳🌳
    🌳 */

    $width = 1;
    $height = 5;

    for ($j = 0; $j < $height; $j++) {
    for ($i = 0; $i < $width; $i++) {
        echo '🌳';
    }
    echo PHP_EOL;
    $width++;
}

$width = 0;
$height = 5;

for ($j = 0; $j < $height; $j++) {
for ($i = 5; $i > $width; $i--) {
    echo '🌳';
}
echo PHP_EOL;
$width++;
}
