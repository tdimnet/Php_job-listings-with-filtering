FROM php:8.3-apache

# Installing required Php extensions
RUN docker-php-ext-install pdo pdo_mysql


WORKDIR /var/www/html
COPY index.php .

