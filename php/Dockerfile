FROM php:7.0.27-fpm
MAINTAINER genrich @team

RUN apt-get update \
  && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng12-dev libmcrypt-dev libxml2-dev libcurl4-gnutls-dev libicu-dev libz-dev libmemcached-dev libmemcached11 libmemcachedutil2 build-essential libxslt1.1 libxslt1-dev git

RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/

RUN docker-php-ext-install pdo_mysql mysqli gd iconv zip mcrypt soap intl mbstring xsl

RUN git clone https://github.com/php-memcached-dev/php-memcached /usr/src/php/ext/memcached \
      && cd /usr/src/php/ext/memcached && git checkout -b php7 origin/php7 \
      && docker-php-ext-configure memcached \
      && docker-php-ext-install memcached

RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.show_error_trace=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_connect_back=off" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_port = 9000" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_host = 10.254.254.254" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.scream = 0" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.show_local_vars = 1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.idekey = PHPSTORM" >> /usr/local/etc/php/conf.d/xdebug.ini

RUN apt-get install nano




