FROM php:8.3.0-fpm
LABEL maintainer="mountain-gorilla"
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

# composer environment
ENV COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_HOME=/composer

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
    apt-get -y install git libicu-dev libonig-dev libzip-dev unzip libfreetype6-dev libjpeg62-turbo-dev libpng-dev locales && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* && \
    mkdir /var/run/php-fpm && \
    docker-php-ext-install intl pdo_mysql zip bcmath gd && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    composer require laravel/passport && \
    composer config -g process-timeout 3600 && \
    composer config -g repos.packagist composer https://packagist.org

COPY ./php-fpm.d/zzz-www.conf /usr/local/etc/php-fpm.d/zzz-www.conf
COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /work/backend
