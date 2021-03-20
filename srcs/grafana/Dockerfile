FROM alpine:3.12.3

RUN apk update
RUN apk add --repository=http://dl-cdn.alpinelinux.org/alpine/edge/main libc6-compat

ADD https://dl.grafana.com/oss/release/grafana-7.2.2.linux-amd64.tar.gz ./
RUN tar -xvf grafana*tar* --strip-components 1
RUN rm -rf ./grafana*tar*

ADD srcs/start.sh ./
COPY srcs/admin.ini conf/
COPY srcs/dashboards.yaml conf/provisioning/dashboards/
COPY srcs/datasources.yaml conf/provisioning/datasources/
COPY ./srcs/dashboards/*.json conf/provisioning/dashboards/json/

EXPOSE 3000

CMD [ "sh", "start.sh" ]
