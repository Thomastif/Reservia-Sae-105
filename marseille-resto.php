<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-hotel-resto.php');

echo $twig->render('ville-heb.twig', [
    'titre' => 'Resto Marseille',
    'nav' => $navmars,
    'tete' => $tete,
    'nav2' => $nav,
    'filtretag' => $filtretag,
    'tableau' => $footer,
    'info' => $restfr,
    'lienacc' => $lienacc,
    'lang' => $langfr,
    'form' => $formmars,
    'lien' => $linkmars,
    'filtre' => $resto,
    'afiltre' => $aresto,
    'hebresto' => $restomars,
    'recherche' => $restomars2,
    'popushow' => $popshow

]);
?>