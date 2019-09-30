FROM php:7.1-apache-buster
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get install -y default-mysql-client && rm -rf /var/lib/apt