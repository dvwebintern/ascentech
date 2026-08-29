FROM php:8.3-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip sqlite3 libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Node (for Vite build)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && apt-get install -y nodejs

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

RUN php artisan config:clear \
    && chmod -R 775 storage bootstrap/cache \
    && touch database/database.sqlite

EXPOSE 10000

CMD php artisan config:cache && php artisan serve --host 0.0.0.0 --port 10000