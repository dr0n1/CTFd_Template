FROM php:5.4-apache

LABEL Organization="Rml" Author="Lewiserii <admin@lewiserii.top>"

COPY start.sh /start.sh
COPY src /var/www/html/


RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys EF0F382A1A7B6500 \
	&& apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 112695A0E562B32A \
	&& echo "deb http://archive.debian.org/debian/ stretch main" > /etc/apt/sources.list \
    && echo "deb http://archive.debian.org/debian-security stretch/updates main" >> /etc/apt/sources.list \
	&& apt-get update -y \
	&& apt-get install -y mariadb-server net-tools curl \
	&& docker-php-ext-install mysqli pdo_mysql mysql \
	&& cp /usr/src/php/php.ini-production /usr/local/etc/php/php.ini \
	&& sh -c 'mysqld_safe &' \
	&& sleep 5s \
	&& mysqladmin -uroot password 'root' \
	&& chmod +x /start.sh \
	&& chown -R www-data:www-data /var/www/html


EXPOSE 80

CMD ["/start.sh"]