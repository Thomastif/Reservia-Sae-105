<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-ville.php');

echo $twig->render('ville.twig', [
    'titre' => 'Week Strasbourg',
    'nav' => $navstra,
    'nav2' => $navang,
    'tete' => $teteang,
    'filtretag' => $filtretagang,
    'tableau' => $footerang,
    'lienacc' => $lienaccang,
    'lang' => $langang,
    'form' => $formstra,
    'lien' => $linkstraang,
    'heb' => $hotelstraang,
    'recherche' => $hotelstraang2,
    'walk' => $baladestraang,
    'balade' => $baladestraang2,
    'restaurant' => $restostraang,
    'resto' => $restostraang2,
    'activity' => $activitestraang,
    'activites' => $activitestraang2,
    'tramway' => $tramstraang,
    'bus' => $busstraang,
    'popushow' => $popshowang

]);
?>