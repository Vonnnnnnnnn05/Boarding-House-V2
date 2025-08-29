FROM php:8.2-apache

# Install mysqli extension for MySQL support
RUN docker-php-ext-install mysqli

# Copy all files to Apache web root
COPY . /var/www/html/

# Expose port 80
EXPOSE 80