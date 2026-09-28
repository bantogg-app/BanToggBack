FROM php:8.3-fpm

# 1. Installation des dépendances système (Ajout de libpq-dev pour Postgres)
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libicu-dev \
    libpq-dev \
    zip \
    unzip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# 2. Configuration et installation des extensions PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd intl zip

# 3. Récupération de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# 4. Copie du projet
COPY . .

# 5. Installation des dépendances Laravel
RUN composer install --optimize-autoloader --no-dev --no-interaction --prefer-dist

# 6. Nettoyage de la configuration
RUN php artisan config:clear

EXPOSE 8000

# 7. Commande de démarrage (Correction du crochet de fin)
CMD php artisan serve --host=0.0.0.0 --port=8000
