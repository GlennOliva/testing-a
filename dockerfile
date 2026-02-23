FROM php:8.2-apache

# Enable rewrite (safe even if you don't use it)
RUN a2enmod rewrite \
 && sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Install common DB extensions (for MySQL)
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy your project into Apache web root
COPY . /var/www/html

# Point Apache to /assess as the public folder
RUN sed -i 's!/var/www/html!/var/www/html/asses!g' /etc/apache2/sites-available/000-default.conf

# Permissions (helpful if you write files/uploads)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80