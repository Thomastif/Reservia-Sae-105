<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-hotel-resto.php');

echo $twig->render('ville-heb.twig', [
    'titre' => 'Restaurant Marseille',
    'nav' => $navmars,
    'nav2' => $navang,
    'filtretag' => $filtretagang,
    'tableau' => $footerang,
    'tete' => $teteang,
    'info' => $restang,
    'lienacc' => $lienaccang,
    'lang' => $langang,
    'form' => $formmars,
    'lien' => $linkmarsang,
    'filtre' => $resto,
    'afiltre' => $aresto,
    'hebresto' => $restomarsang,
    'recherche' => $restomarsang2,
    'popushow' => $popshowang

]);
?>