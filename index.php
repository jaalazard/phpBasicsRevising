<?php

$movies = [
  'Les aventuriers de l\'arche perdue' => 1981,
  'Indiana Jones et le temple maudit' => 1984, 
  'Indiana Jones et la dernière croisade' => 1989
];

asort($movies);

foreach($movies as $movie => $year){
            echo "Le film s'intitule ".$movie.", il est sorti en ".$year.".<br>";
  }

?>