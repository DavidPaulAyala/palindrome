<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Palindrome.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register (new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use($app) {
    return $app['twig']->render('home.html.twig');
    });

    $app->post('/results', function() use($app) {
        $phrase = $_POST['phrase'];
        $newPalindrome = new Palindrome();
        $result = $newPalindrome->determinePalindrome($phrase);
        return $app['twig']->render('results.html.twig', array('result' => $result));
    });
    return $app;
 ?>
