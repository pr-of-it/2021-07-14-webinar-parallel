FROM php:7.4-zts

RUN apt-get update
RUN apt-get install -y curl libonig-dev libpq-dev libpthread-stubs0-dev
RUN docker-php-ext-install -j$(nproc) iconv mbstring pdo_pgsql

RUN pecl install parallel && docker-php-ext-enable parallel

RUN ln -s /usr/local/bin/php /bin/php

WORKDIR /app
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/app/public"]