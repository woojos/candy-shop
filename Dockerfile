FROM php:7.1-apache-buster
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli