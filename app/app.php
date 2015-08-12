<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RockPaperScissors.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('rps_form.html.twig');
    });

    $app->get('/results', function() use ($app) {
        $new = new RockPaperScissors;
        $output = $new->rockPaperScissorsMethod($_GET['player1'], $_GET['player2']);
        return $app['twig']->render('rps_results.html.twig', array('results' => $output));
    });

    $app->get('/one_player', function() use ($app){
        return $app['twig']->render('rps_form_one_player.html.twig');
    });

    $app->get('/one_player_results', function() use ($app) {
        $new = new RockPaperScissors;
        $output = $new->rockPaperScissorsOnePlayer($_GET['player1']);
        return $app['twig']->render('rps_results_one_player.html.twig', array('results' => $output));
    });

    return $app;
 ?>
