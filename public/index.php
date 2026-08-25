<?php
require__DIR__.'/../vendor/autoload.php';

use Slim\Factory\AppFactory;

// status
$app = AppFactory: :create();
$app->get('/status', function ($request, $response) {
$response->getBody()->write(json_encode(['status' => 'ok']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});


// nome
$app = AppFactory: :create();
$app->get('/nome', function ($request, $response) {
$response->getBody()->write(json_encode(['nome' => 'Hatsune']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});

// curso
$app = AppFactory: :create();
$app->get('/curso', function ($request, $response) {
$response->getBody()->write(json_encode(['curso' => 'Informatica']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});

// gato
$app = AppFactory: :create();
$app->get('/gato', function ($request, $response) {
$response->getBody()->write(json_encode(['gato' => 'Miau!']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});

// cachorro
$app = AppFactory: :create();
$app->get('/cachorro', function ($request, $response) {
$response->getBody()->write(json_encode(['cachorro' => 'Au au!']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});

// telefone
$app = AppFactory: :create();
$app->get('/telefone', function ($request, $response) {
$response->getBody()->write(json_encode(['telefone' => 'Trin Trin!']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});

// desmotivacional 
$app = AppFactory: :create();
$app->get('/desmotivacional', function ($request, $response) {
$response->getBody()->write(json_encode(['desmotivacional' => 'O sucesso é ir de fracasso em fracasso sem perder o entusiasmo.']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});

// motivacional  
$app = AppFactory: :create();
$app->get('/motivacional', function ($request, $response) {
$response->getBody()->write(json_encode(['motivacional' => 'Não importa o quão devagar você vá, desde que você não pare.']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});

// musica    
$app = AppFactory: :create();
$app->get('/musica', function ($request, $response) {
$response->getBody()->write(json_encode(['musica' => 'M@GICAL☆CURE! LOVE SHOT!']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});

// filme    
$app = AppFactory: :create();
$app->get('/filme', function ($request, $response) {
$response->getBody()->write(json_encode(['filme' => 'Truque de mestre']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});

// tic    
$app = AppFactory: :create();
$app->get('/tic', function ($request, $response) {
$response->getBody()->write(json_encode(['tic' => 'toc']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});



$app->run();