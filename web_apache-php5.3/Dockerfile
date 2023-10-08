FROM php:5.3-apache

LABEL Organization="Rml" Author="Lewiserii <admin@lewiserii.top>"

COPY start.sh /start.sh

COPY src/ /var/www/html/

RUN chmod +x /start.sh \
	&& chown -R www-data:www-data /var/www/html

CMD ["/start.sh"]
