<?php

include 'vendor/autoload.php';

try {
    // le dossier ou on trouve les templates
    $loader = new Twig\Loader\FilesystemLoader('src');

    // initialiser l'environement Twig
    $twig = new Twig\Environment($loader);

    // load template
    $template = $twig->load('projets.html.twig');

    // set template variables
    // render template
    echo $template->render();
} catch (Exception $e) {
    die('ERROR: ' . $e->getMessage());
}
