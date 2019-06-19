<?php

require_once './vendor/autoload.php';
require_once './application/controllers/HomePage/HomePageAction.php';

use Slim\App;

$config = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$app = new App($config);

$app->get('/', \HomePageAction::class);

//$app->get('/login', \HomeController::class.':loginAction');

$app->get('/profile',function(){
    echo 'Profile Page';
});

$app->run();
