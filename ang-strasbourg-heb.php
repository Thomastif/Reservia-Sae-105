<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-hotel-resto.php');

echo $twig->render('ville-heb.twig', [
    'titre' => 'Hotel Strasbourg',
    'nav' => $navstra,
    'nav2' => $navang,
    'filtretag' => $filtretagang,
    'tableau' => $footerang,
    'tete' => $teteang,
    'info' => $hebang,
    'lienacc' => $lienaccang,
    'lang' => $langang,
    'form' => $formstra,
    'lien' => $linkstraang,
    'filtre' => $heb,
    'afiltre' => $aheb,
    'hebresto' => $hotelstraang,
    'recherche' => $hotelstraang2,
    'popushow' => $popshowang

]);
?>