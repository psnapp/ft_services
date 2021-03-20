FROM alpine:3.12.3

RUN apk update && apk upgrade

RUN apk add wget nginx
RUN apk add php7 php7-fpm php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session
RUN apk add openrc
RUN apk add supervisor


RUN adduser -D -g 'www' www
RUN mkdir /www && chown -R www:www /var/lib/nginx && chown -R www:www /www && mkdir -p /run/nginx
COPY ./srcs/nginx.conf /etc/nginx/conf.d/default.conf
RUN wget https://ru.wordpress.org/latest-ru_RU.tar.gz
RUN tar -xf latest-ru_RU.tar.gz
RUN mv wordpress /www/
RUN rm -rf latest-ru_RU.tar.gz

COPY ./srcs/supervisord.conf /etc/supervisord.conf
COPY ./srcs/wp-config.php /www/wordpress/
COPY ./srcs/start.sh .

EXPOSE 5050

ENTRYPOINT ["sh", "start.sh"]
