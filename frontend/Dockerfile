FROM node:16-alpine

# Configurar diretório de trabalho
WORKDIR /app

# Copiar o arquivo package.json e package-lock.json
COPY package*.json ./

# Instalar dependências
RUN npm install

# Copiar o código do projeto
COPY . .

# Construir o projeto
RUN npm run build

# Instalar o servidor HTTP simples
RUN npm install -g serve

# Expor a porta
EXPOSE 5000

# Comando para iniciar o servidor HTTP
CMD ["serve", "-s", "dist"]
