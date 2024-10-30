FROM php:8.3-apache

WORKDIR /var/www/html

# Installing required Php extensions
RUN docker-php-ext-install pdo pdo_mysql

# Installing Composer (need to have Git install before)
RUN apt-get update 
RUN apt-get install git -y
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


COPY index.php .
