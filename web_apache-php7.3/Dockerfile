FROM php:7.3-apache

LABEL Organization="Rml" Author="Lewiserii <admin@lewiserii.top>"

COPY start.sh /start.sh

COPY src/ /var/www/html/

RUN chmod +x /start.sh \
	&& cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini \
	&& chown -R www-data:www-data /var/www/html \
	&& docker-php-ext-install gettext

CMD ["/start.sh"]
