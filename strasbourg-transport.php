<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-transport.php');

echo $twig->render('ville-transport.twig', [
    'titre' => 'Transports Strasbourg',
    'nav' => $navstra,
    'tete' => $tete,
    'nav2' => $nav,
    'filtretag' => $filtretag,
    'tableau' => $footer,
    'lienacc' => $lienacc,
    'lang' => $langfr,
    'form' => $formstra,
    'lien' => $linkstra,
    'filtre' => $filtre,
    'afiltre' => $afiltre,
    'tramway' => $tramstra,
    'bus' => $busstra,
    'carte' => $cartestra,

]);
?>