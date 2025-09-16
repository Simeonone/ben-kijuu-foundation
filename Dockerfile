FROM php:8.1-apache

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Enable required Apache modules
RUN a2enmod rewrite headers

# Configure Apache
RUN echo '<Directory /var/www/html/>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
    </Directory>' > /etc/apache2/conf-available/override.conf

RUN a2enconf override

# Copy application files
COPY . /var/www/html/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 755 /var/www/html/

# Create startup script
RUN echo '#!/bin/bash\n\
    PORT=${PORT:-80}\n\
    # Set ServerName to suppress warnings\n\
    echo "ServerName localhost" >> /etc/apache2/apache2.conf\n\
    # Update Apache port configuration\n\
    sed -i "s/Listen 80/Listen $PORT/" /etc/apache2/ports.conf\n\
    sed -i "s/:80>/:$PORT>/" /etc/apache2/sites-available/000-default.conf\n\
    # Start Apache\n\
    apache2-foreground' > /start.sh

RUN chmod +x /start.sh

EXPOSE $PORT

CMD ["/start.sh"]