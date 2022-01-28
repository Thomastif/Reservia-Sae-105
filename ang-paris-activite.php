<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-activite-balade.php');

echo $twig->render('ville-activites.twig', [
    'titre' => 'Activity Paris',
    'nav' => $navparis,
    'nav2' => $navang,
    'filtretag' => $filtretagang,
    'tableau' => $footerang,
    'tete' => $teteang,
    'lienacc' => $lienaccang,
    'lang' => $langang,
    'form' => $formparis,
    'lien' => $linkparisang,
    'filtre' => $activite,
    'afiltre' => $aactivite,
    'actwalk' => $activiteparisang,
    'activites' => $activiteparisang2,

]);
?>