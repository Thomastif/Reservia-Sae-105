<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-transport.php');

echo $twig->render('ville-transport.twig', [
    'titre' => 'Transport Paris',
    'nav' => $navparis,
    'nav2' => $navang,
    'filtretag' => $filtretagang,
    'tableau' => $footerang,
    'tete' => $teteang,
    'lienacc' => $lienaccang,
    'lang' => $langang,
    'form' => $formparis,
    'lien' => $linkparisang,
    'filtre' => $filtre,
    'afiltre' => $afiltre,
    'tramway' => $tramparisang,
    'bus' => $busparisang,
    'carte' => $carteparisang,

]);
?>