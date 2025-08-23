#!/usr/bin/env bash
set -e

cd /var/www/html

# Copia .env si no existe (útil en primeros deploys)
if [ ! -f ".env" ] && [ -f ".env.example" ]; then
  cp .env.example .env
fi

# Genera APP_KEY si no está
if ! grep -q "^APP_KEY=" .env || [ -z "$(grep '^APP_KEY=' .env | cut -d= -f2)" ]; then
  php artisan key:generate --force
fi

# Enlaza storage -> public/storage
php artisan storage:link || true

# (Opcional) caches para prod
# php artisan config:cache
# php artisan route:cache
# php artisan view:cache

# Permisos
chown -R www-data:www-data storage bootstrap/cache || true
chmod -R 775 storage bootstrap/cache || true

# Inicia Apache en foreground (necesario para Docker)
exec apache2-foreground
