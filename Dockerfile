FROM php:8.4-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install \
        pdo \
        pdo_sqlite \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Node.js 20 for Vite
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www

# Copy Laravel application
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install frontend dependencies and build Vite
RUN npm install && npm run build

# Prepare Laravel
RUN touch database/database.sqlite \
    && php artisan migrate --force \
    && php artisan config:clear \
    && chmod -R 775 storage bootstrap/cache

# Render uses port 10000
EXPOSE 10000

# Start Laravel
CMD php artisan config:cache && php artisan serve --host=0.0.0.0 --port=10000