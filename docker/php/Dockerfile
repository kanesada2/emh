FROM php:8.3.4-fpm

COPY ./php.ini /usr/local/etc/php/

RUN apt update && apt install -y zlib1g-dev g++ libicu-dev zip libzip-dev zip libpq-dev \
    && docker-php-ext-install intl opcache pdo pgsql pdo_pgsql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip \
    && apt-get install -y git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html/src