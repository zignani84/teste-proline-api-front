# teste-proline-api-front

## Configuração e Execução

### Pré-requisitos

- Docker
- Docker Compose

### Passos para Instalação

1. Clone o repositório:

   ```bash
   git clone <URL_DO_REPOSITÓRIO>
   cd <projeto>
   ```

2. Copie o arquivo de exemplo .env e configure suas variáveis de ambiente:

    ```bash
    cp .env.example .env
    ```

3. Inicie os contêineres Docker:

    ```bash
    docker-compose up -d --build
    ```

4. Acesse o diretório do projeto laravel:

   ```bash
   cd app
   ```

5. Copie o arquivo de exemplo .env e configure suas variáveis de ambiente:

    ```bash
    cp .env.example .env
    ```

6. Dentro da .env do diretório altere as conexões com o banco:

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=photoapp
    DB_USERNAME=root
    DB_PASSWORD=root
    ```

7. Execute as migrações:

    ```bash
    docker-compose exec api bash
    php artisan migrate
    ```

8. Se tiver problemas com Network Error, o APP_URL da .env da API deve ser alterado - Para saber qual o IP, execute este comando fora do bash do container do docker:

    ```bash
    docker inspect -f '{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' nginx
    ```

### Estrutura do Projeto

- app/ - Código da aplicação Laravel
- database/ - Migrações e seeders
- routes/ - Definições de rotas

### Instruções Adicionais

Acesse a API em <http://localhost:8000>.
O ponto de entrada para o upload de fotos e geolocalizações é POST /api/photos.

## Descrição

Esta interface em Vue.js lista as fotos e geolocalizações armazenadas pela API Laravel, utilizando Tailwind CSS para o estilo.

## Configuração e Execução

### Passos para Instalação

1. Entre no projeto do front-end:

   ```bash
   cd frontend
   ```

2. Project setup:

    ```bash
    yarn install
    ```

3. Compiles and hot-reloads for development

    ```bash
    docker exec -it frontend /bin/sh
    yarn serve
    ```

4. Se tiver problemas com Network Error, o endpoint deve ser alterado no PhotoList.vue - Para saber qual o IP da API, o projeto do photoApi do Laravel deve estar rodando e execute este comando fora do bash do container do docker:

    ```bash
    docker inspect -f '{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' nginx
    ```

### Estrutura do Projeto

- src/components/ - Componentes reutilizáveis
- src/assets/ - Arquivos estáticos (CSS, imagens, etc.)

### Instruções Adicionais

Acesse a interface geralmente em <http://localhost:8080> ou pelo IP.
Certifique-se de que a API Laravel esteja rodando para que a interface possa consumir os dados.

### Customize configuration

See [Configuration Reference](https://cli.vuejs.org/config/).
