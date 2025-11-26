#!/bin/bash

# 1. Fix permissions (Crucial for 500 errors)
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# 2. Clear Laravel Cache (Fixes configuration issues)
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# 3. Start Apache
exec apache2-foreground