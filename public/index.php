<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();

// status
$app->get('/status', function ($request, $response) {
    $response->getBody()->write(json_encode(['status' => 'ok']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// nome
$app->get('/nome', function ($request, $response) {
    $response->getBody()->write(json_encode(['nome' => 'Hatsune']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// curso
$app->get('/curso', function ($request, $response) {
    $response->getBody()->write(json_encode(['curso' => 'Informatica']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// gato
$app->get('/gato', function ($request, $response) {
    $response->getBody()->write(json_encode(['gato' => 'Miau!']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// cachorro
$app->get('/cachorro', function ($request, $response) {
    $response->getBody()->write(json_encode(['cachorro' => 'Au au!']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// telefone
$app->get('/telefone', function ($request, $response) {
    $response->getBody()->write(json_encode(['telefone' => 'Trin Trin!']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// desmotivacional 
$app->get('/desmotivacional', function ($request, $response) {
    $response->getBody()->write(json_encode(['desmotivacional' => 'O sucesso é ir de fracasso em fracasso sem perder o entusiasmo.']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// motivacional  
$app->get('/motivacional', function ($request, $response) {
    $response->getBody()->write(json_encode(['motivacional' => 'Não importa o quão devagar você vá, desde que você não pare.']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// musica    
$app->get('/musica', function ($request, $response) {
    $response->getBody()->write(json_encode(['musica' => 'M@GICAL☆CURE! LOVE SHOT!']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// filme    
$app->get('/filme', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Truque de mestre']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// tic    
$app->get('/tic', function ($request, $response) {
    $response->getBody()->write(json_encode(['tic' => 'toc']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

/* -=-=-=-=-=-=-=-=-=-=-=-
    Att 2
   -=-=-=-=-=-=-=-=-=-=-=-*/

// 1. Status
$app->get('/status2', function ($request, $response) {
    $response->getBody()->write(json_encode(['status' => 'ok', 'tema' => 'animes']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// 2. Animes populares
$app->get('/animes/populares', function ($request, $response) {
    $dados = [
        'populares' => ['Attack on Titan', 'Demon Slayer', 'Jujutsu Kaisen', 'One Piece']
    ];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// 3. Gêneros de anime
$app->get('/animes/generos', function ($request, $response) {
    $dados = [
        'generos' => ['Shonen', 'Seinen', 'Isekai', 'Mecha', 'Shojo', 'Slice of Life']
    ];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// 4. Estúdios famosos
$app->get('/animes/estudios', function ($request, $response) {
    $dados = [
        'estudios' => ['MAPPA', 'ufotable', 'Studio Ghibli', 'Kyoto Animation', 'Madhouse']
    ];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// 5. Protagonistas
$app->get('/animes/protagonistas', function ($request, $response) {
    $dados = [
        'protagonistas' => ['Monkey D. Luffy', 'Naruto Uzumaki', 'Eren Yeager', 'Saitama']
    ];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// 6. Filmes de anime
$app->get('/animes/filmes', function ($request, $response) {
    $dados = [
        'filmes' => ['A Viagem de Chihiro', 'Your Name', 'Koe no Katachi', 'Akira']
    ];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// 7. Recomendações de clássicos
$app->get('/animes/classicos', function ($request, $response) {
    $dados = [
        'classicos' => ['Dragon Ball Z', 'Cowboy Bebop', 'Neon Genesis Evangelion', 'Death Note']
    ];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// 8. Vilões marcantes
$app->get('/animes/viloes', function ($request, $response) {
    $dados = [
        'viloes' => ['Madara Uchiha', 'Meruem', 'Johan Liebert', 'Aizen Sosuke']
    ];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// 9. Frase marcante
$app->get('/animes/frase', function ($request, $response) {
    $dados = [
        'frase' => 'Se você não gosta do seu destino, não o aceite. Em vez disso, tenha a coragem para mudá-lo.',
        'autor' => 'Naruto Uzumaki'
    ];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// 10. Curiosidades
$app->get('/animes/curiosidades', function ($request, $response) {
    $dados = [
        'curiosidade' => 'Sazae-san é a série de anime de televisão mais longa do mundo, sendo exibida desde 1969.'
    ];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});


/* -=-=-=-=-=-=-=-=-=-=-=-
    Att 3
   -=-=-=-=-=-=-=-=-=-=-=-*/

// 1. Status
$app->get('/status2/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><status><estado>ok</estado><tema>animes</tema></status>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

// 2. Animes populares
$app->get('/animes/populares/xml', function ($request, $response) {
    $dados = [
        'populares' => ['Attack on Titan', 'Demon Slayer', 'Jujutsu Kaisen', 'One Piece']
    ];
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><populares><anime>Attack on Titan</anime><anime>Demon Slayer</anime><anime>Jujutsu Kaisen</anime><anime>One Piece</anime></populares>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

// 3. Gêneros de anime
$app->get('/animes/generos/xml', function ($request, $response) {
    $dados = [
        'generos' => ['Shonen', 'Seinen', 'Isekai', 'Mecha', 'Shojo', 'Slice of Life']
    ];
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><generos><genero>Shonen</genero><genero>Seinen</genero><genero>Isekai</genero><genero>Mecha</genero><genero>Shojo</genero><genero>Slice of Life</genero></generos>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

// 4. Estúdios famosos
$app->get('/animes/estudios/xml', function ($request, $response) {
    $dados = [
        'estudios' => ['MAPPA', 'ufotable', 'Studio Ghibli', 'Kyoto Animation', 'Madhouse']
    ];
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><estudios><estudio>MAPPA</estudio><estudio>ufotable</estudio><estudio>Studio Ghibli</estudio><estudio>Kyoto Animation</estudio><estudio>Madhouse</estudio></estudios>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

// 5. Protagonistas
$app->get('/animes/protagonistas/xml', function ($request, $response) {
    $dados = [
        'protagonistas' => ['Monkey D. Luffy', 'Naruto Uzumaki', 'Eren Yeager', 'Saitama']
    ];
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><protagonistas><protagonista>Monkey D. Luffy</protagonista><protagonista>Naruto Uzumaki</protagonista><protagonista>Eren Yeager</protagonista><protagonista>Saitama</protagonista></protagonistas>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

// 6. Filmes de anime
$app->get('/animes/filmes/xml', function ($request, $response) {
    $dados = [
        'filmes' => ['A Viagem de Chihiro', 'Your Name', 'Koe no Katachi', 'Akira']
    ];
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filmes><filme>A Viagem de Chihiro</filme><filme>Your Name</filme><filme>Koe no Katachi</filme><filme>Akira</filme></filmes>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

// 7. Recomendações de clássicos
$app->get('/animes/classicos/xml', function ($request, $response) {
    $dados = [
        'classicos' => ['Dragon Ball Z', 'Cowboy Bebop', 'Neon Genesis Evangelion', 'Death Note']
    ];
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><classicos><classico>Dragon Ball Z</classico><classico>Cowboy Bebop</classico><classico>Neon Genesis Evangelion</classico><classico>Death Note</classico></classicos>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

// 8. Vilões marcantes
$app->get('/animes/viloes/xml', function ($request, $response) {
    $dados = [
        'viloes' => ['Madara Uchiha', 'Meruem', 'Johan Liebert', 'Aizen Sosuke']
    ];
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><viloes><vilao>Madara Uchiha</vilao><vilao>Meruem</vilao><vilao>Johan Liebert</vilao><vilao>Aizen Sosuke</vilao></viloes>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

// 9. Frase marcante
$app->get('/animes/frase/xml', function ($request, $response) {
    $dados = [
        'frase' => 'Se você não gosta do seu destino, não o aceite. Em vez disso, tenha a coragem para mudá-lo.',
        'autor' => 'Naruto Uzumaki'
    ];
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><frase><texto>Se você não gosta do seu destino, não o aceite. Em vez disso, tenha a coragem para mudá-lo.</texto><autor>Naruto Uzumaki</autor></frase>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

// 10. Curiosidades
$app->get('/animes/curiosidades/xml', function ($request, $response) {
    $dados = [
        'curiosidade' => 'Sazae-san é a série de anime de televisão mais longa do mundo, sendo exibida desde 1969.'
    ];
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><curiosidade>' . $dados['curiosidade'] . '</curiosidade>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
//          Produtos
// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

$app->addBodyParsingMiddleware();
$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);
$produtos = [
['id' => 1, 'nome' => 'Teclado'],
['id' => 2, 'nome' => 'Mouse'],
['id' => 3, 'nome' => 'Monitor'],
['id' => 4, 'nome' => 'Notebook'],
];

$app->get('/produtos/{id}', function ($request, $response, $args) use (&$produtos) {
$produto = current(array_filter($produtos, fn ($p) => $p['id'] === (int) $args['id'])) ?: null;
if (!$produto) {
$response->getBody()->write(json_encode(['erro' => 'Produto não encontrado']));
return $response->withHeader('Content-Type', 'application/json')->withStatus(404);
}
$response->getBody()->write(json_encode($produto));
return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
});

// Adicionar produto

$app->post('/produtos', function ($request, $response) use (&$produtos) {
$dados = $request->getParsedBody();
$novoProduto = ['id' => count($produtos) + 1, 'nome' => $dados['nome']];
$produtos[] = $novoProduto;
$response->getBody()->write(json_encode($novoProduto));
return $response->withHeader('Content-Type', 'application/json')->withStatus(201);
});

$app->run();