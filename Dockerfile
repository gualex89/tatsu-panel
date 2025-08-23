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
    supervisor \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copiar proyecto
COPY . .

# 🔥 Eliminar configuraciones y archivos de Nginx por defecto
RUN rm -f /etc/nginx/sites-enabled/default \
    && rm -f /etc/nginx/sites-available/default \
    && rm -f /usr/share/nginx/html/index.html

# Copiar configuración de Nginx
COPY ./nginx.conf /etc/nginx/conf.d/default.conf

# Copiar configuración de Supervisor
COPY ./supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Instalar dependencias PHP y permisos
RUN composer install --no-dev --optimize-autoloader \
    && chmod -R 777 storage bootstrap/cache

EXPOSE 80

# Iniciar supervisord (nginx + php-fpm)
CMD ["supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
