<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-singup.php');

echo $twig->render('singup.twig', [
    'titre' => 'Se connecter',
    'form' => $form,
    'nav2' => $nav,
    'tableau' => $footer,
    'lienacc' => $lienacc,
    'lang' => $langfr,

]);
?>