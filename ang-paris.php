<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-ville.php');

echo $twig->render('ville.twig', [
    'titre' => 'Week Paris',
    'nav' => $navparis,
    'nav2' => $navang,
    'filtretag' => $filtretagang,
    'tableau' => $footerang,
    'tete' => $teteang,
    'lienacc' => $lienaccang,
    'lang' => $langang,
    'form' => $formparis,
    'lien' => $linkparisang,
    'heb' => $hotelparisang,
    'recherche' => $hotelparisang2,
    'walk' => $baladeparisang,
    'balade' => $baladeparisang2,
    'restaurant' => $restoparisang,
    'resto' => $restoparisang2,
    'activity' => $activiteparisang,
    'activites' => $activiteparisang2,
    'tramway' => $tramparisang,
    'bus' => $busparisang,
    'popushow' => $popshowang

]);
?>