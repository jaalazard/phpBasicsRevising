<?php

$nomFilm = 'Indiana Jones et la dernière croisade';
$viewed = false;
$release = 2000;
$rating = 1.5;
$didIViewIt = '';
if ($viewed) {
    $didIViewIt = "oui";
} else {
    $didIViewIt = "non";
};
echo "le film s'appelle " . $nomFilm . " il est sorti en " . $release . " je l'ai vu ? => " . $didIViewIt ;