<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-activite-balade.php');

echo $twig->render('ville-activites.twig', [
    'titre' => 'Activity Strasbourg',
    'nav' => $navstra,
    'nav2' => $navang,
    'filtretag' => $filtretagang,
    'tableau' => $footerang,
    'tete' => $teteang,
    'lienacc' => $lienaccang,
    'lang' => $langang,
    'form' => $formstra,
    'lien' => $linkstraang,
    'filtre' => $activite,
    'afiltre' => $aactivite,
    'actwalk' => $activitestraang,
    'activites' => $activitestraang2,

]);
?>