<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/CoinCombinator.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    //Routes
    $app->get("/", function() use ($app) {
        return $app['twig']->render('cents_input.html.twig');
    });

    return $app;
?>
