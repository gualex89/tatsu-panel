# Imagen base con PHP 8.1 y FPM
FROM php:8.1-fpm

# Instalar dependencias del sistema y extensiones necesarias para Laravel + Voyager
RUN apt-get update && apt-get install -y \
    unzip git curl libpng-dev libonig-dev libxml2-dev zip libzip-dev nginx supervisor \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos del proyecto
COPY . .

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader && \
    php artisan key:generate && \
    php artisan storage:link

# Copiar configuración de Nginx
COPY ./nginx.conf /etc/nginx/conf.d/default.conf

# Copiar configuración de supervisord
COPY ./supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Exponer puerto 80
EXPOSE 80

# Ejecutar supervisord (arranca nginx + php-fpm)
CMD ["/usr/bin/supervisord"]
