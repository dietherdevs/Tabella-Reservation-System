# 1. Use PHP 8.2 with Apache
FROM php:8.2-apache

# 2. Install dependencies for Laravel and Postgres
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev 

# 3. Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# 4. Install PHP extensions
RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd

# 5. Get Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 6. Set working directory
WORKDIR /var/www/html

# 7. Copy project files
COPY . .

# 8. Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# 9. Set permissions (Critical for Laravel)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# 10. Configure Apache to point to /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# 11. Enable Apache mod_rewrite
RUN a2enmod rewrite

# 12. Expose Port 80
EXPOSE 80