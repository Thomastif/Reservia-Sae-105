<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-ville.php');

echo $twig->render('ville.twig', [
    'titre' => 'Week Marseille',
    'nav' => $navmars,
    'nav2' => $navang,
    'filtretag' => $filtretagang,
    'tableau' => $footerang,
    'tete' => $teteang,
    'lienacc' => $lienaccang,
    'lang' => $langang,
    'form' => $formmars,
    'lien' => $linkmarsang,
    'heb' => $hotelmarsang,
    'recherche' => $hotelmarsang2,
    'walk' => $balademarsang,
    'balade' => $balademarsang2,
    'restaurant' => $restomarsang,
    'resto' => $restomarsang2,
    'activity' => $activitemarsang,
    'activites' => $activitemarsang2,
    'tramway' => $trammarsang,
    'bus' => $busmarsang,
    'popushow' => $popshowang

]);
?>