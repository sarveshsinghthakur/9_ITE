# Use the official PHP image from Docker Hub
FROM php:8.1-apache

# Copy your application code to the Apache document root
COPY . /var/www/html

# Expose port 80 for the web server
EXPOSE 80
