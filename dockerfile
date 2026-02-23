FROM php:8.2-apache

RUN a2enmod rewrite \
 && sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

RUN docker-php-ext-install pdo pdo_mysql mysqli

COPY . /var/www/html

# IMPORTANT: must match your folder name exactly
RUN sed -i 's!/var/www/html!/var/www/html/asses!g' /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80