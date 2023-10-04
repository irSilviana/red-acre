FROM wordpress

# Set environment variables used by the Wordpress image
# DB_USER and DB_PASSWORD are included as an example. However,
# these should be removed and set during docker run.
ENV WORDPRESS_DB_HOST=localhost \
    WORDPRESS_DB_USER=wordpress \
    WORDPRESS_DB_PASSWORD=wordpress \
    WORDPRESS_DB_NAME=wordpress \
    WORDPRESS_TABLE_PREFIX=wp_

# COPY plugins/ /var/www/html/wp-content/plugins
COPY wp-content/themes/red-acre /var/www/html/wp-content/themes/red-acre
COPY wp-content/uploads/ /var/www/html/wp-content/uploads