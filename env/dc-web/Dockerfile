FROM ubuntu:16.04

ENV APP_NAME 'development_container'
ENV APACHE_DOCUMENT_ROOT /var/www/src
ENV APACHE_SERVER_ALIAS '*.vm'

RUN apt-get update -y && apt-get install -y \
    unzip \
    git \
    curl \
    vim \
    graphviz \
    mc \
    npm \
    apache2 \
    php7.0 \
    php7.0-cli \
    php7.0-curl \
    php-xdebug \
    libapache2-mod-php7.0

COPY php/apache2-php.ini /etc/apache2/php7.0/apache2/php.ini
COPY php/cli-php.ini /etc/apache2/php7.0/cli/php.ini
COPY apache/vhost.conf /etc/apache2/sites-available/${APP_NAME}.conf
COPY apache/vhost-ssl.conf /etc/apache2/sites-available/${APP_NAME}-ssl.conf

RUN a2enmod rewrite ssl
RUN a2ensite ${APP_NAME}

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

EXPOSE 80 443 9000

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
