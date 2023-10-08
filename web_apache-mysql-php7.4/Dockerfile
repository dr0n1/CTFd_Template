FROM php:7.4-apache

LABEL Organization="Rml" Author="Lewiserii <admin@lewiserii.top>"

COPY start.sh /start.sh
COPY src /var/www/html/


RUN sed -i "s@http://deb.debian.org@http://mirrors.aliyun.com@g" /etc/apt/sources.list \
	&& apt-get update -y \
	&& apt-get install -y mariadb-server net-tools curl \
	&& docker-php-source extract \
	&& docker-php-ext-install mysqli pdo_mysql \
	&& docker-php-source delete \
	&& cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini \
	&& sh -c 'mysqld_safe &' \
	&& sleep 5s \
	&& mysqladmin -uroot password 'root' \
	&& chmod +x /start.sh \
	&& chown -R www-data:www-data /var/www/html


EXPOSE 80

CMD ["/start.sh"]