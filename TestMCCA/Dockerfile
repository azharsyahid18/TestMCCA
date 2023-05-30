FROM php:7.4-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql
COPY ./src /var/php-env/html
COPY ./apache-config.conf /etc/apache2/sites-available/000-default.conf
EXPOSE 80
CMD [apache2-foreground]