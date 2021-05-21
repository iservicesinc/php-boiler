FROM php:7.4-apache
COPY ./.docker/vhost.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite