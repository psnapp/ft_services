FROM alpine:3.12.3

RUN apk update && apk upgrade

RUN apk add wget
RUN apk add php7 php7-fpm php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session
RUN apk add openssh openssl
RUN apk add nginx
RUN apk add openrc
RUN apk add supervisor

RUN adduser -D -g 'www' www
RUN mkdir /www && chown -R www:www /var/lib/nginx && chown -R www:www /www && mkdir -p /run/nginx

WORKDIR /www
RUN openssl req \
		-newkey rsa:2048 -nodes -keyout local_host.key \
		-x509 -days 365 -out local_host.crt \
		-subj "/C=RU/ST=Moscow/L=Moscow/O=School21/CN=psnapp"

COPY ./srcs/nginx.conf /etc/nginx/conf.d/default.conf
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
RUN mkdir -p /usr/share/webapps/ && cd /usr/share/webapps
RUN tar -xf phpMyAdmin-4.9.0.1-all-languages.tar.gz
RUN mkdir -p /www/php
RUN mv phpMyAdmin-4.9.0.1-all-languages/* /www/php/
RUN rm -rf phpMyAdmin-4.9.0.1-all-languages.tar.gz

COPY ./srcs/nginx.conf /etc/nginx/conf.d/default.conf
COPY ./srcs/supervisord.conf /etc/supervisord.conf
COPY ./srcs/config.inc.php /www/php/
COPY ./srcs/start.sh .

RUN 	chmod 777 start.sh


EXPOSE 5000

ENTRYPOINT ["sh", "start.sh"]