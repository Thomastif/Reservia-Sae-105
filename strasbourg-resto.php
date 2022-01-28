<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-hotel-resto.php');

echo $twig->render('ville-heb.twig', [
    'titre' => 'Séjour strasbourg',
    'nav' => $navstra,
    'tete' => $tete,
    'nav2' => $nav,
    'filtretag' => $filtretag,
    'tableau' => $footer,
    'info' => $restfr,
    'lienacc' => $lienacc,
    'lang' => $langfr,
    'form' => $formstra,
    'lien' => $linkstra,
    'filtre' => $resto,
    'afiltre' => $aresto,
    'hebresto' => $restostra,
    'recherche' => $restostra2,
    'popushow' => $popshow
]);
?>