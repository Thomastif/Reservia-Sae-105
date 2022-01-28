<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-hotel-resto.php');

echo $twig->render('ville-heb.twig', [
    'titre' => 'Hebergement Marseille',
    'nav' => $navmars,
    'tete' => $tete,
    'nav2' => $nav,
    'filtretag' => $filtretag,
    'tableau' => $footer,
    'info' => $hebfr,
    'lienacc' => $lienacc,
    'lang' => $langfr,
    'form' => $formmars,
    'lien' => $linkmars,
    'filtre' => $heb,
    'afiltre' => $aheb,
    'hebresto' => $hotelmars,
    'recherche' => $hotelmars2,
    'popushow' => $popshow

]);
?>