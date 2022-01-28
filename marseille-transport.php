<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-transport.php');

echo $twig->render('ville-transport.twig', [
    'titre' => 'Transports Marseille',
    'nav' => $navmars,
    'tete' => $tete,
    'nav2' => $nav,
    'filtretag' => $filtretag,
    'tableau' => $footer,
    'lienacc' => $lienacc,
    'lang' => $langfr,
    'form' => $formmars,
    'lien' => $linkmars,
    'filtre' => $filtre,
    'afiltre' => $afiltre,
    'tramway' => $trammars,
    'bus' => $busmars,
    'carte' => $cartemars,

]);
?>