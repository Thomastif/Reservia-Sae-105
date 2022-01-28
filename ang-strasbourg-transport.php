<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-transport.php');

echo $twig->render('ville-transport.twig', [
    'titre' => 'Transport Strasbourg',
    'nav' => $navstra,
    'nav2' => $navang,
    'filtretag' => $filtretagang,
    'tableau' => $footerang,
    'tete' => $teteang,
    'lienacc' => $lienaccang,
    'lang' => $langang,
    'form' => $formstra,
    'lien' => $linkstraang,
    'filtre' => $filtre,
    'afiltre' => $afiltre,
    'tramway' => $tramstraang,
    'bus' => $busstraang,
    'carte' => $cartestraang,

]);
?>