#!/bin/bash

# 1. Fix permissions
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# 2. RUN MIGRATIONS (This creates your tables automatically)
# The --force flag is needed because we are in production
php artisan migrate --force

# 3. Clear Laravel Cache
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# 4. Start Apache
exec apache2-foreground