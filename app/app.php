<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app){
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_results", function() use ($app){
        $word = $_GET['word'];
        $word_array = str_split($word);
        $scrabble = new Scrabble;
        return $app['twig']->render('results.html.twig', array('word' => $word, 'result' => $scrabble->checkScore($word), 'splitword' => $word_array));
    });

    return $app;
?>
