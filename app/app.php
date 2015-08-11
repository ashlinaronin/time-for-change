<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/CoinCombinator.php';

    $app = new Silex\Application();

    //Routes
    $app->get("/", function() use ($app) {
        return $app['twig']->render('cents_input.html.twig');
    });

    return $app;
?>
