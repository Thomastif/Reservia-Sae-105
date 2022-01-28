<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-hotel-resto.php');

echo $twig->render('ville-heb.twig', [
    'titre' => 'Resto Paris',
    'nav' => $navparis,
    'tete' => $tete,
    'nav2' => $nav,
    'filtretag' => $filtretag,
    'tableau' => $footer,
    'info' => $restfr,
    'lienacc' => $lienacc,
    'lang' => $langfr,
    'form' => $formparis,
    'lien' => $linkparis,
    'filtre' => $resto,
    'afiltre' => $aresto,
    'hebresto' => $restoparis,
    'recherche' => $restoparis2,
    'popushow' => $popshow

]);
?>