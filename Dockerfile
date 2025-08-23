FROM php:8.2-apache

# Instalar dependencias del sistema necesarias para Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    unzip \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql bcmath opcache

# Habilitar mod_rewrite para Laravel
RUN a2enmod rewrite

# Instalar Composer (desde imagen oficial)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Directorio de trabajo
WORKDIR /var/www/html

# Copiar proyecto al contenedor
COPY . .

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# Configuración de Apache y OPcache
COPY ./docker/laravel.conf /etc/apache2/sites-available/000-default.conf
COPY ./docker/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

# Exponer el puerto
EXPOSE 80

# Comando de arranque
CMD ["apache2-foreground"]
