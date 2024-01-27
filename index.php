<?php

/* Exercice 1 : the cutest one
Choose the cutest animal between these 3 possibilities : 🐼🐱🕷️
Create condition to display the corresponding sentence, depending of your choice
    🐼 : "You are right, pandas are so cuuute (and they can do kung fu !)"
    🐱 : "Little kittens are cute too (just before scratching you slyly 🩹...)"
    🕷️ : "Erk, you're a creepy one"
    Empty or any other choice : "Please choose the cutest animal in this list 🐼🐱🕷️" */

    $cutestAnimal = '🐼';
echo ($cutestAnimal === '🐼') ? "You are right, pandas are so cuuute (and they can do kung fu!)" :
     (($cutestAnimal === '🐱') ? "Little kittens are cute too (just before scratching you slyly 🩹...)" :
     (($cutestAnimal === '🕷️') ? "Erk, you're a creepy one" :
     "Please choose the cutest animal in this list 🐼🐱🕷️"));


