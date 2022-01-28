<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-ville.php');

echo $twig->render('ville.twig', [
    'titre' => 'Sejour Paris',
    'nav' => $navparis,
    'tete' => $tete,
    'nav2' => $nav,
    'filtretag' => $filtretag,
    'tableau' => $footer,
    'lienacc' => $lienacc,
    'lang' => $langfr,
    'form' => $formparis,
    'lien' => $linkparis,
    'heb' => $hotelparis,
    'recherche' => $hotelparis2,
    'walk' => $baladeparis,
    'balade' => $baladeparis2,
    'restaurant' => $restoparis,
    'resto' => $restoparis2,
    'activity' => $activiteparis,
    'activites' => $activiteparis2,
    'tramway' => $tramparis,
    'bus' => $busparis,
    'popushow' => $popshow

]);
?>