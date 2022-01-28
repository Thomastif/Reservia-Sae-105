<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-hotel-resto.php');

echo $twig->render('ville-heb.twig', [
    'titre' => 'Hotel Paris',
    'nav' => $navparis,
    'nav2' => $navang,
    'filtretag' => $filtretagang,
    'tableau' => $footerang,
    'tete' => $teteang,
    'info' => $hebang,
    'lienacc' => $lienaccang,
    'lang' => $langang,
    'form' => $formparis,
    'lien' => $linkparisang,
    'filtre' => $heb,
    'afiltre' => $aheb,
    'hebresto' => $hotelparisang,
    'recherche' => $hotelparisang2,
    'popushow' => $popshowang

]);
?>