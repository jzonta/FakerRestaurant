FROM php:7.4-fpm

WORKDIR /var/www

# Install bash
RUN apt-get update && apt-get install -y \
 bash-completion \
 zip \
 unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN chown -R www-data:www-data /var/www
