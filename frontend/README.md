# photo-interface

```markdown
# Vue.js Interface
```

## Descrição

Esta interface em Vue.js lista as fotos e geolocalizações armazenadas pela API Laravel, utilizando Tailwind CSS para o estilo.

## Configuração e Execução

### Passos para Instalação

1. Clone o repositório:

   ```bash
   git clone <URL_DO_REPOSITÓRIO>
   cd <project>
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
