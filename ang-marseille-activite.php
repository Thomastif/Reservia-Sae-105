<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-activite-balade.php');

echo $twig->render('ville-activites.twig', [
    'titre' => 'Activity Marseille',
    'nav' => $navmars,
    'nav2' => $navang,
    'filtretag' => $filtretagang,
    'tableau' => $footerang,
    'tete' => $teteang,
    'lienacc' => $lienaccang,
    'lang' => $langang,
    'form' => $formmars,
    'lien' => $linkmarsang,
    'filtre' => $activite,
    'afiltre' => $aactivite,
    'actwalk' => $activitemarsang,
    'activites' => $activitemarsang2,

]);
?>