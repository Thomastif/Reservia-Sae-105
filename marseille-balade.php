<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-activite-balade.php');

echo $twig->render('ville-activites.twig', [
    'titre' => 'Balade Marseille',
    'nav' => $navmars,
    'tete' => $tete,
    'nav2' => $nav,
    'filtretag' => $filtretag,
    'tableau' => $footer,
    'lienacc' => $lienacc,
    'lang' => $langfr,
    'form' => $formmars,
    'lien' => $linkmars,
    'filtre' => $balade,
    'afiltre' => $abalade,
    'actwalk' => $balademars,
    'activites' => $balademars2,

]);
?>