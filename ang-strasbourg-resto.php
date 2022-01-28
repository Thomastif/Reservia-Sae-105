<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-hotel-resto.php');

echo $twig->render('ville-heb.twig', [
    'titre' => 'Restaurant Strasbourg',
    'nav' => $navstra,
    'nav2' => $navang,
    'filtretag' => $filtretagang,
    'tableau' => $footerang,
    'tete' => $teteang,
    'info' => $restang,
    'lienacc' => $lienaccang,
    'lang' => $langang,
    'form' => $formstra,
    'lien' => $linkstraang,
    'filtre' => $resto,
    'afiltre' => $aresto,
    'hebresto' => $restostraang,
    'recherche' => $restostraang2,
    'popushow' => $popshowang
    
]);
?>