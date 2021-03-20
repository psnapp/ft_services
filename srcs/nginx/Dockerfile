FROM	alpine:3.12.3

RUN   	apk add openrc 

RUN		apk add nginx && \
		apk add supervisor

RUN		apk add openssl && \
		apk add openssh

RUN		adduser -D 'psnapp'; echo "psnapp:qwerty" | chpasswd;

RUN 	openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
		-subj "/C=RU/ST=Moscow/L=Moscow/O=School21/CN=psnapp" \
		-keyout /etc/ssl/localhost.key \
		-out /etc/ssl/localhost.crt

RUN		mkdir www

COPY	./srcs/index.html /www/

COPY	./srcs/style.css /www/

COPY 	./srcs/nginx.conf /etc/nginx/conf.d/default.conf

COPY 	./srcs/supervisord.conf /etc/supervisord.conf

COPY 	./srcs/start.sh start.sh

RUN 	chmod 711 start.sh

EXPOSE	80 443 22

CMD		[ "sh", "start.sh" ]
