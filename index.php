<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0, 2)];
$indyWeapon = $weapons[rand(0, 2)];

echo ($indyWeapon == $weapons[0] && $opponentWeapon == $weapons[1] || $indyWeapon == $weapons[1] && $opponentWeapon == $weapons[2] || $indyWeapon == $weapons[2] && $opponentWeapon == $weapons[0]) ? "Indy wins !" :
(($opponentWeapon == $weapons[0] && $indyWeapon == $weapons[1] || $opponentWeapon == $weapons[1] && $indyWeapon == $weapons[2] || $opponentWeapon == $weapons[2] && $indyWeapon == $weapons[0]) ? "The opponent wins !" : "Draw !");
