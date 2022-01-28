<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-hotel-resto.php');

echo $twig->render('ville-heb.twig', [
    'titre' => 'Restaurant Paris',
    'nav' => $navparis,
    'nav2' => $navang,
    'filtretag' => $filtretagang,
    'tableau' => $footerang,
    'tete' => $teteang,
    'info' => $restang,
    'lienacc' => $lienaccang,
    'lang' => $langang,
    'form' => $formparis,
    'lien' => $linkparisang,
    'filtre' => $resto,
    'afiltre' => $aresto,
    'hebresto' => $restoparisang,
    'recherche' => $restoparisang2,
    'popushow' => $popshowang

]);
?>