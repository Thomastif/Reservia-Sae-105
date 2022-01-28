<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-activite-balade.php');

echo $twig->render('ville-activites.twig', [
    'titre' => 'Balade strasbourg',
    'nav' => $navstra,
    'tete' => $tete,
    'nav2' => $nav,
    'filtretag' => $filtretag,
    'tableau' => $footer,
    'lienacc' => $lienacc,
    'lang' => $langfr,
    'form' => $formstra,
    'lien' => $linkstra,
    'filtre' => $balade,
    'afiltre' => $abalade,
    'actwalk' => $baladestra,
    'activites' => $baladestra2,

]);
?>