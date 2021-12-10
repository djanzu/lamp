FROM php:7-apache
# COPY php.ini /usr/local/etc/php/
RUN apt-get update
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev libmcrypt-dev libonig-dev
RUN docker-php-ext-configure gd 
RUN docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install pdo_mysql mysqli mbstring iconv
# RUN docker-php-ext-install gd
RUN pecl channel-update pecl.php.net
RUN pecl install xdebug mcrypt
RUN docker-php-ext-enable xdebug mcrypt
RUN apt-get install -y lsof
EXPOSE 80
EXPOSE 9003

