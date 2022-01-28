<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-singup.php');

echo $twig->render('singup.twig', [
    'titre' => 'Sing Up',
    'form' => $formang,
    'nav2' => $navang,
    'tableau' => $footerang,
    'lienacc' => $lienaccang,
    'lang' => $langang,

]);
?>