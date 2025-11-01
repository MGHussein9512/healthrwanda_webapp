# Dockerfile
FROM php:8.2-apache

# Enable mysqli extension
RUN docker-php-ext-install mysqli

# Copy application files
COPY src/ /var/www/html/

# Expose port 80
EXPOSE 80
