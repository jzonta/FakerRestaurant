FROM php:7.4-cli-alpine

WORKDIR /var/www

# Install bash
RUN apk add \
 zip \
 unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN chown -R www-data:www-data /var/www
