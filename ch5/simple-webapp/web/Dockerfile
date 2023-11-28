FROM php:8-apache

WORKDIR /var/www/html

RUN apt-get update
RUN apt-get install -y libonig-dev
RUN docker-php-ext-install pdo_mysql mysqli
