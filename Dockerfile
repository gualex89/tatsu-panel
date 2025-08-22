# Imagen base PHP con FPM
FROM php:8.2-fpm

# Instalar dependencias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    unzip \
    curl \
    nginx \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Directorio de trabajo
WORKDIR /var/www

# Copiar proyecto
COPY . .

# Copiar configuración personalizada de Nginx
COPY ./nginx.conf /etc/nginx/conf.d/default.conf

# Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# Permisos
RUN chmod -R 777 storage bootstrap/cache

# Exponer puerto
EXPOSE 80

# Comando de inicio: iniciar PHP-FPM y Nginx en foreground
CMD service php8.2-fpm start && nginx -g 'daemon off;'
