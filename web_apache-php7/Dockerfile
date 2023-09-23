FROM php:7.0-apache

COPY start.sh /start.sh

RUN chmod +x /start.sh

COPY php.ini /usr/local/etc/php/php.ini

COPY src/ /var/www/html/

CMD ["/start.sh"]
