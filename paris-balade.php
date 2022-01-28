<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-activite-balade.php');

echo $twig->render('ville-activites.twig', [
    'titre' => 'Balade Paris',
    'nav' => $navparis,
    'tete' => $tete,
    'nav2' => $nav,
    'filtretag' => $filtretag,
    'tableau' => $footer,
    'lienacc' => $lienacc,
    'lang' => $langfr,
    'form' => $formparis,
    'lien' => $linkparis,
    'filtre' => $balade,
    'afiltre' => $abalade,
    'actwalk' => $baladeparis,
    'activites' => $baladeparis2,

]);
?>