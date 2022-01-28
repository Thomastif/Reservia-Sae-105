<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-activite-balade.php');

echo $twig->render('ville-activites.twig', [
    'titre' => 'Activite strasbourg',
    'nav' => $navstra,
    'tete' => $tete,
    'nav2' => $nav,
    'filtretag' => $filtretag,
    'footer' => $footer,
    'tableau' => $footer,
    'lang' => $langfr,
    'form' => $formstra,
    'lien' => $linkstra,
    'filtre' => $activite,
    'afiltre' => $aactivite,
    'actwalk' => $activitestra,
    'activites' => $activitestra2


]);
?>