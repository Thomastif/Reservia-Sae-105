<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-ville.php');

echo $twig->render('ville.twig', [
    'titre' => 'Sejour Strasbourg',
    'nav' => $navstra,
    'tete' => $tete,
    'nav2' => $nav,
    'filtretag' => $filtretag,
    'tableau' => $footer,
    'lienacc' => $lienacc,
    'lang' => $langfr,
    'form' => $formstra,
    'lien' => $linkstra,
    'heb' => $hotelstra,
    'recherche' => $hotelstra2,
    'walk' => $baladestra,
    'balade' => $baladestra2,
    'restaurant' => $restostra,
    'resto' => $restostra2,
    'activity' => $activitestra,
    'activites' => $activitestra2,
    'tramway' => $tramstra,
    'bus' => $busstra,
    'popushow' => $popshow
]);
?>