FROM php:8.1-fpm

# Instalar dependências
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libonig-dev \
    libzip-dev \
    && docker-php-ext-configure gd \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configurar diretório de trabalho
WORKDIR /var/www

# Copiar o projeto para o diretório de trabalho
COPY . .

# Instalar dependências do Laravel
RUN composer install

# Permissões de escrita no diretório storage
RUN chmod -R 777 storage

# Permissões de cache do Laravel
RUN chown -R www-data:www-data \
    /var/www/storage \
    /var/www/bootstrap/cache

# Expor a porta
EXPOSE 9000

# Rodar as migrations e iniciar o PHP-FPM
CMD ["bash", "-c", "php artisan migrate && php-fpm"]
