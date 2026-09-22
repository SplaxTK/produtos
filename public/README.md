```bash
composer require slim/slim
composer require slim/psr7
```

Nome do Curso: Informática
Nome da Unidade Curricular: Desenvolver Serviços Web
Nome do aluno: Davi Santana

API de teste com Slim PHP

Como instalar:
1. Acesse a pasta do projeto
2. Execute o comando:
   ```bash
   composer install
   ```
3. Verifique se o Slim foi instalado corretamente
4. Inicie o servidor local:
   ```bash
   php -S localhost:8080 -t public
   ```

Como testar:
- Abra o navegador e acesse:
  http://localhost:8080/status
- Ou use o curl no terminal:
  ```bash
  curl http://localhost:8080/status
  curl http://localhost:8080/nome
  curl http://localhost:8080/curso
  curl http://localhost:8080/gato
  curl http://localhost:8080/cachorro
  ```

Rotas básicas:
/status: Retorna se a API está ativa
/nome: Retorna o nome do aluno
/curso: Retorna o nome do curso
/gato: Retorna 'Miau!'
/cachorro: Retorna 'Au Au!'
/telefone: Retorna 'Trin Trin!'
/desmotivacional: Retorna uma frase desmotivacional
/motivacional: Retorna uma frase motivacional
/musica: Retorna uma música famosa
/filme: Retorna um filme
/tic: Retorna 'toc'
/: Retorna a página inicial da API

Rotas de animes:
/status2: Retorna status com tema anime
/animes/populares: Lista animes populares
/animes/generos: Lista gêneros de anime
/animes/estudios: Lista estúdios famosos
/animes/protagonistas: Lista protagonistas
/animes/filmes: Lista filmes de anime
/animes/classicos: Lista clássicos
/animes/viloes: Lista vilões marcantes
/animes/frase: Retorna uma frase marcante com autor
/animes/curiosidades: Retorna uma curiosidade

Rotas XML:
/status2/xml: Retorna status em XML
/animes/populares/xml: Lista em XML
/animes/generos/xml: Gêneros em XML
/animes/estudios/xml: Estúdios em XML
/animes/protagonistas/xml: Protagonistas em XML
/animes/filmes/xml: Filmes em XML
/animes/classicos/xml: Clássicos em XML
/animes/viloes/xml: Vilões em XML
/animes/frase/xml: Frase em XML
/animes/curiosidades/xml: Curiosidade em XML

Rotas de produtos:
GET /produtos: Lista todos os produtos
GET /produtos/{id}: Busca um produto pelo ID
POST /produtos: Cria um novo produto
PUT /produtos/{id}: Atualiza um produto pelo ID
DELETE /produtos/{id}: Deleta um produto pelo ID

Exemplo de uso com JSON:
```bash
curl -X POST http://localhost:8080/produtos \
  -H "Content-Type: application/json" \
  -d '{"nome":"Monitor"}'
```

Exemplo de busca de produto:
```bash
curl http://localhost:8080/produtos/1
```

Exemplo de atualização:
```bash
curl -X PUT http://localhost:8080/produtos/1 \
  -H "Content-Type: application/json" \
  -d '{"nome":"Teclado Gamer"}'
```

Exemplo de remoção:
```bash
curl -X DELETE http://localhost:8080/produtos/1
```

Observação:
A API foi criada para demonstrar rotas simples em PHP com Slim, retornando mensagens em JSON e XML, além de operações CRUD em produtos.

Prints de testes:

/status
![alt text](image-2.png)

GET /produtos/1
![alt text](image.png)

GET /gato
![alt text](image-1.png)

POST /produtos
![alt text](image-3.png)

PUT /produtos
![alt text](image-4.png)

DELETE /produtos
![alt text](image-5.png)