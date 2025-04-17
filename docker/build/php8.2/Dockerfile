FROM php:8.2-fpm
ENV TZ=Europe/Bucharest
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
COPY ./docker/build/php8.2/start.sh /usr/local/bin/start
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libz-dev \
        libmemcached-dev \
        libmcrypt-dev \
        libxml2-dev \
        libjpeg62-turbo-dev \
        libicu-dev \
        libzip-dev \
        libgd-dev \
        zip \
        cron \
        nano \
    && docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg\
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-install soap \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install bcmath \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install opcache \
    && docker-php-ext-install zip
RUN chmod u+x /usr/local/bin/start
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /var/www/laravel
COPY ./ /var/www/laravel
COPY ./docker/config/php.ini /usr/local/etc/php/php.ini
RUN chmod a+rwx -R /var/www/laravel/bootstrap
RUN chmod a+rwx -R /var/www/laravel/storage
RUN composer install
CMD ["/usr/local/bin/start"]
