#!/bin/bash

cd /var/www/html


# Download WP-CLI
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar

# Download WordPress core
./wp-cli.phar core download --allow-root

# Create wp-config.php using environment variables
./wp-cli.phar config create \
    --dbname="$DB_NAME" \
    --dbuser="$DB_USER" \
    --dbpass="$DB_PASSWORD" \
    --dbhost=mariadb \
    --allow-root

# Install WordPress
./wp-cli.phar core install \
    --url="$WP_URL" \
    --title="$WP_TITLE" \
    --admin_user="$WP_ADMIN_USER" \
    --admin_password="$WP_ADMIN_PASS" \
    --admin_email="$WP_ADMIN_EMAIL" \
    --allow-root

# Create a subscriber user
./wp-cli.phar user create "$WP_USER" "$WP_USER_EMAIL" \
    --role=subscriber \
    --user_pass="$WP_USER_PASS" \
    --allow-root

# Start PHP-FPM
php-fpm8.2 -F
