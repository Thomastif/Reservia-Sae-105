<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-transport.php');

echo $twig->render('ville-transport.twig', [
    'titre' => 'Transports Paris',
    'nav' => $navparis,
    'tete' => $tete,
    'nav2' => $nav,
    'filtretag' => $filtretag,
    'tableau' => $footer,
    'lienacc' => $lienacc,
    'lang' => $langfr,
    'form' => $formparis,
    'lien' => $linkparis,
    'filtre' => $filtre,
    'afiltre' => $afiltre,
    'tramway' => $tramparis,
    'bus' => $busparis,
    'carte' => $carteparis,

]);
?>