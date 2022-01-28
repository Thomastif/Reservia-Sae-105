<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-transport.php');

echo $twig->render('ville-transport.twig', [
    'titre' => 'Transport Marseille',
    'nav' => $navmars,
    'nav2' => $navang,
    'filtretag' => $filtretagang,
    'tableau' => $footerang,
    'tete' => $teteang,
    'lienacc' => $lienaccang,
    'lang' => $langang,
    'form' => $formmars,
    'lien' => $linkmarsang,
    'filtre' => $filtre,
    'afiltre' => $afiltre,
    'tramway' => $trammarsang,
    'bus' => $busmarsang,
    'carte' => $cartemarsang,

]);
?>