FROM alpine:3.12.3

RUN apk update && apk upgrade
RUN apk add openrc
RUN apk add mysql mysql-client
RUN mkdir "/run/mysqld"
RUN chown -R mysql /run/mysqld

COPY ./srcs/start.sh ./
COPY ./srcs/my.cnf /etc/my.cnf
COPY /srcs/mysql.sql ./

RUN     chmod 777 start.sh

EXPOSE 3306

CMD [ "sh", "start.sh"]