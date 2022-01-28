<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-hotel-resto.php');

echo $twig->render('ville-heb.twig', [
    'titre' => 'Hotel Marseille',
    'nav' => $navmars,
    'nav2' => $navang,
    'filtretag' => $filtretagang,
    'tableau' => $footerang,
    'tete' => $teteang,
    'info' => $hebang,
    'lienacc' => $lienaccang,
    'lang' => $langang,
    'form' => $formmars,
    'lien' => $linkmarsang,
    'filtre' => $heb,
    'afiltre' => $aheb,
    'hebresto' => $hotelmarsang,
    'recherche' => $hotelmarsang2,
    'popushow' => $popshowang

]);
?>