# CRUD API Laravel

Este é um projeto que implementa uma API em Laravel (PHP) que permite criar, ler, atualizar e deletar duas entidades diferentes: filmes e jogos.

## Requisitos

-   PHP >= 7.4
-   Composer
-   MySQL ou SQLite
-   Postman

## Instalação

-   Clone este repositório para a sua máquina local
-   Navegue até a pasta do projeto e execute `composer install` para instalar as dependências
-   Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente, especialmente as relacionadas ao banco de dados
-   Execute `php artisan key:generate` para gerar uma chave de aplicação
-   Execute `php artisan migrate` para criar as tabelas do banco de dados
-   Execute `php artisan db:seed` para popular o banco de dados com dados de teste (opcional)
-   Execute `php artisan serve` para iniciar o servidor de desenvolvimento

## Uso

-   A API possui os seguintes endpoints:

| Método | Rota             | Descrição                                 |
| ------ | ---------------- | ----------------------------------------- |
| GET    | /api/movies      | Lista todos os filmes                     |
| GET    | /api/movies/{id} | Mostra os detalhes de um filme específico |
| POST   | /api/movies      | Cria um novo filme                        |
| PUT    | /api/movies/{id} | Atualiza um filme existente               |
| DELETE | /api/movies/{id} | Deleta um filme existente                 |
| GET    | /api/games       | Lista todos os jogos                      |
| GET    | /api/games/{id}  | Mostra os detalhes de um jogo específico  |
| POST   | /api/games       | Cria um novo jogo                         |
| PUT    | /api/games/{id}  | Atualiza um jogo existente                |
| DELETE | /api/games/{id}  | Deleta um jogo existente                  |

-   Para testar a API, você pode usar o Postman ou qualquer outra ferramenta de sua preferência
-   Você pode importar a coleção do Postman que está na raiz do projeto (`CRUD_API_Laravel.postman_collection.json`) para ter acesso aos exemplos de requisições e respostas
