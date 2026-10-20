<?php
// tests/ProdutosTest.php
use PHPUnit\Framework\TestCase;
use Slim\Psr7\Factory\ServerRequestFactory;

class ProdutosTest extends TestCase
    {
    public function testPostCriaProduto(): void
        {
        $app = require __DIR__ . '/../src/app.php'; // retorna $app sem chamar ->run()

        $request = (new ServerRequestFactory())
            ->createServerRequest('POST', '/produtos')
            ->withHeader('Content-Type', 'application/json');
        $request->getBody()->write(json_encode(['nome' => 'Mouse']));
        $request->getBody()->rewind();

        $response = $app->handle($request);

        $this->assertEquals(201, $response->getStatusCode());
        $corpo = json_decode((string) $response->getBody(), true);
        $this->assertEquals('Mouse', $corpo['nome']);
    }
}