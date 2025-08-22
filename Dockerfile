# Etapa 1: Dependencias PHP
FROM php:8.1-fpm

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    unzip git curl libpng-dev libonig-dev libxml2-dev zip libzip-dev nginx \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Directorio de trabajo
WORKDIR /var/www/html

# Copiar proyecto
COPY . .

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader && \
    php artisan key:generate && \
    php artisan storage:link

# Copiar configuración de Nginx
COPY ./nginx.conf /etc/nginx/conf.d/default.conf

# Exponer puerto 80
EXPOSE 80

# Ejecutar Nginx + PHP-FPM
CMD service nginx start && php-fpm
