<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-hotel-resto.php');

echo $twig->render('ville-heb.twig', [
    'titre' => 'Hebergements strasbourg',
    'nav' => $navstra,
    'tete' => $tete,
    'nav2' => $nav,
    'filtretag' => $filtretag,
    'tableau' => $footer,    
    'info' => $hebfr,
    'lienacc' => $lienacc,
    'lang' => $langfr,
    'form' => $formstra,
    'lien' => $linkstra,
    'filtre' => $heb,
    'afiltre' => $aheb,
    'hebresto' => $hotelstra,
    'recherche' => $hotelstra2,
    'popushow' => $popshow

]);
?>