# photoApi

```markdown
# Laravel API com Docker
```

## Descrição

Esta API em Laravel recebe e armazena fotos e geolocalizações enviadas pelo aplicativo React Native.

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

3. Dentro da .env altere as conexões com o banco:

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=photoapp
    DB_USERNAME=root
    DB_PASSWORD=root
    ```

4. Inicie os contêineres Docker:

    ```bash
    docker-compose up -d --build
    ```

5. Execute as migrações:

    ```bash
    docker-compose exec api bash
    php artisan migrate
    ```

6. Se tiver problemas com Network Error, o APP_URL da .env da API deve ser alterado - Para saber qual o IP, execute este comando fora do bash do container do docker:

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
