<?php

/* Exercise 2 : planting more trees 🌲🌴
In previous exercise, you can plant one 🌳 per hour. So in a loop of 8, you plant 8 🌳, easy.
Now, you have to plant 🌲, they are more delicate and need to dig deeper. You need 2 hours to plant a 🌲.
    Write a loop to plant 🌲 during a 6 hours working day.
    Write a loop to plant 🌲 during a 8 hours working day.
    Write a loop to plant 🌲 during a 9 hours working day.
You have now experience in tree planting. You work now with very delicate and rare tree 🌴. You need 3 hours of work to plant one 🌴.
    Write a loop to plant 🌴 during a 6 hours working day.
    Write a loop to plant 🌴 during a 2 hours working day.
    Write a loop to plant 🌴 during a 8 hours working day. */

$numberOfHours = 6;
for ($i = 0; $i < floor($numberOfHours / 2); $i++) {
    echo '🌲';
}
echo '   ';

$numberOfHours = 8;
for ($i = 0; $i < floor($numberOfHours / 3); $i++) {
    echo '🌴';
}
echo '   ';
