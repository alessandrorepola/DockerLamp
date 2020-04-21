FROM php:7.4-apache

COPY ./www /var/html/www/

RUN apt-get update && apt-get upgrade
RUN docker-php-ext-install mysqli
RUN chown -R www-data:www-data /var/html/www/ \
    && a2enmod rewrite \
    && chown -R 775 /var/html/www/ \
    && ls -al /var/html/www/ \
    && cat /var/html/www/index.php

EXPOSE 80