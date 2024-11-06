# Use an official PHP runtime as a parent image
FROM php:8.1-cli

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Install any PHP extensions needed (example: mysqli for database connections)
RUN docker-php-ext-install mysqli

# Expose port 80 for the web server
EXPOSE 80

# Set the PORT environment variable (Render uses this to bind the port)
ENV PORT 80

# Start the PHP built-in server on the specified PORT
# Ensure it listens on all network interfaces (0.0.0.0)
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]
