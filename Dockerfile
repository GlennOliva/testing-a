FROM php:8.2-apache

# Enable rewrite + allow .htaccess (safe)
RUN a2enmod rewrite \
 && sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# If you use MySQL, keep these extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy project directly into Apache web root
COPY . /var/www/html

# Permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80