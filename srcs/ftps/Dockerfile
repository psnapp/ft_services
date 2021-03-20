FROM    alpine:3.12.3

RUN     apk add openrc \
        && apk add vsftpd \
        && apk add openssl \
        && openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
        -keyout /etc/ssl/private/vsftpd.key \
        -out /etc/ssl/certs/vsftpd.crt \
        -subj "/C=RU/ST=Moscow/L=Moscow/O=School21/CN=psnapp" \
        && adduser -D -h /var/ftp psnapp; echo "psnapp:psnapp" | chpasswd \
        && mkdir -p /var/ftp

COPY    /srcs/vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY    /srcs/start.sh .

RUN     chmod 777 start.sh

EXPOSE  20 21 30000

CMD     [ "sh", "start.sh" ]